#!/bin/bash
echo "running sanity checks..."
rgrep -E '="(js|image|papers|ss)\/' pages/
if [ $? -ne 1 ]; then echo "All the links above should be relative to / (otherwise there will be problems with l10n"; fi

echo -e "\ngenerating the website..."
rm -Rf output
(ls -1 pages/en/ | sed -n "s/\\(.*\\)\.php/\\1/p") | (mkdir output; while read x; do ./make-static-page.sh "en" "$x" > output/${x}.html; done)
(ls -1 pages/fr/ | sed -n "s/\\(.*\\)\.php/\\1/p") | (mkdir output/fr; while read x; do ./make-static-page.sh "fr" "$x" > output/fr/${x}.html; done)
cp -a * output
rm -Rf output/pages output/includes output/output output/legacy_pages output/*.php
echo "done."
