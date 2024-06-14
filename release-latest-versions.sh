#!/usr/bin/env bash

# Generate Fluent Forms stubs from all the latest versions.
set -e

# Fetch plugin information from WordPress.org.
WC_JSON="$(wget -q -O- "https://api.wordpress.org/plugins/info/1.0/fluentform.json")"

# Define the specific versions to process.
VERSIONS=(3.1 3.2 3.3 3.4 3.5 3.6 4.0 4.1 4.2 4.3 5.0 5.1)

for V in "${VERSIONS[@]}"; do
    # Construct the jq filter to find the latest version for the given major.minor version.
    printf -v JQ_FILTER '."versions" | keys[] | select(test("^%s\\\\.%s\\\\.\\\\d+$"))' "${V%.*}" "${V#*.}"
    LATEST="$(jq -r "$JQ_FILTER" <<<"$WC_JSON" | sort -V | tail -n 1)"

    if [ -z "$LATEST" ]; then
        echo "No version found for ${V}!"
        continue
    fi

    echo "Releasing version ${LATEST} ..."

    if git rev-parse "refs/tags/v${LATEST}" >/dev/null 2>&1; then
        echo "Tag for version ${LATEST} already exists! Skipping..."
        continue
    fi

    # Clean up the source/ directory.
    git status --ignored --short -- source/ | awk '/^!! / {print $2}' | xargs --no-run-if-empty rm -rf

    # Download the new version.
    wget -P source/ "https://downloads.wordpress.org/plugin/fluentform.${LATEST}.zip"
    unzip -q -d source/ "source/fluentform.${LATEST}.zip"

    # Generate stubs.
    echo "Generating stubs for version ${LATEST}..."
    ./generate.sh

    # Check if there are any changes to commit.
    if git diff-index --quiet HEAD --; then
        echo "No changes to commit for version ${LATEST}. Skipping tag..."
    else
        # Commit and tag the new version.
        echo "Tagging version ${LATEST}..."
        git add .
        git commit --all -m "Generate stubs for Fluent Forms ${LATEST}"
        git tag "v${LATEST}"
    fi

    # Clean up the source directory to prevent conflicts.
    rm -rf source/*
done

echo "All specified versions have been processed."
