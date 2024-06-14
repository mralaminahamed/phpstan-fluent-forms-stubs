#!/usr/bin/env bash
#
# Generate Fluent Forms stubs from all the latest versions starting from 1.8.
#

set -e

# Fetch plugin information from WordPress.org.
WC_JSON="$(wget -q -O- "https://api.wordpress.org/plugins/info/1.0/fluentform.json")"

# Specify the minimum version to start collecting from.
MIN_VERSION="1.1"

# Prepare output file.
OUTPUT_FILE="fluentform_versions.txt"
> "$OUTPUT_FILE"

# Extract and filter versions.
VERSIONS=$(jq -r '."versions" | keys[]' <<<"$WC_JSON" | grep -v "trunk" | sort -V)

# Iterate through versions and collect those from 1.8 onwards.
collect_versions=false
for VERSION in $VERSIONS; do
    if $collect_versions || [[ "$VERSION" == "$MIN_VERSION"* ]]; then
        collect_versions=true
        echo "$VERSION" >> "$OUTPUT_FILE"
    fi
done

# Remove the vtrunk tag if it exists.
if git show-ref --tags | grep -q "refs/tags/vtrunk"; then
    git tag -d vtrunk
fi

# Read the collected versions and process each one.
while IFS= read -r VERSION; do
    echo "Processing version ${VERSION} ..."

    if git rev-parse "refs/tags/v${VERSION}" >/dev/null 2>&1; then
        echo "Tag exists for version ${VERSION}!"
        continue
    fi

    # Clean up source/ directory
    git status --ignored --short -- source/ | sed -n -e 's#^!! ##p' | xargs --no-run-if-empty -- rm -rf
    
    # Get new version
    wget -P source/ "https://downloads.wordpress.org/plugin/fluentform.${VERSION}.zip"
    unzip -q -d source/ source/fluentform.*.zip

    # Generate stubs
    echo "Generating stubs ..."
    ./generate.sh

    # Add files
    git add .

    # Tag version
    git commit --all -m "Generate stubs for Fluent Form ${VERSION}"
    git tag "v${VERSION}"
done < "$OUTPUT_FILE"

echo "All versions processed."
