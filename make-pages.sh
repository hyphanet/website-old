#!/bin/bash
set -o errexit
shopt -s extglob
echo -e "\ngenerating the website..."
rm -Rf output
mkdir output
for lang in en es; do
    (ls -1 "pages/$lang/" | sed -n "s/\\(.*\\)\.php/\\1/p") | (while read x; do ./make-static-page.sh "$lang" "$x" > "output/${x}.$lang.html"; done)
done
cp -a !(pages|includes|output|legacy_pages|*.php|*.sh|README.md) output
echo "done."
