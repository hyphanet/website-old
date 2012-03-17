#!/bin/bash
set -o errexit
echo -e "\ngenerating the website..."
rm -Rf output
mkdir output
for lang in en es; do
    (ls -1 "pages/$lang/" | sed -n "s/\\(.*\\)\.php/\\1/p") | (while read x; do ./make-static-page.sh "$lang" "$x" > "output/${x}.$lang.html"; done)
done
cp -a * output
rm -Rf output/pages output/includes output/output output/legacy_pages output/*.php output/*.sh output/README.md
echo "done."
