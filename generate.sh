#!/usr/bin/env bash
#
# Generate Fluent Forms stubs from the source directory.
#

HEADER=$'/**\n * Generated stub declarations for Fluent Forms.\n * @see https://fluentforms.com/\n * @see https://github.com/mralaminahamed/phpstan-fluent-forms-stubs\n */'

FILE="fluent-forms-stubs.php"
FILE_CONSTANTS="fluent-forms-constants-stubs.php"

set -e

test -f "$FILE" || touch "$FILE"
test -f "$FILE_CONSTANTS" || touch "$FILE_CONSTANTS"
test -d "source/fluentform"

# Exclude globals, constants.
"$(dirname "$0")/vendor/bin/generate-stubs" \
    --include-inaccessible-class-nodes \
    --force \
    --finder=finder.php \
    --header="$HEADER" \
    --functions \
    --classes \
    --interfaces \
    --traits \
    --out="$FILE"

# Exclude functions, classes, interfaces, traits and globals.
"$(dirname "$0")/vendor/bin/generate-stubs" \
    --include-inaccessible-class-nodes \
    --force \
    --finder=finder.php \
    --header="$HEADER" \
    --constants \
    --out="$FILE_CONSTANTS"
