#!/bin/bash
rm -Rf output
(ls -1 pages/en/ | sed -n "s/\\(.*\\)\.php/\\1/p") | (mkdir output; while read x; do ./make-static-page.sh "en" "$x" > output/${x}.html; done)
(ls -1 pages/fr/ | sed -n "s/\\(.*\\)\.php/\\1/p") | (mkdir output/fr; while read x; do ./make-static-page.sh "fr" "$x" > output/fr/${x}.html; done)
cp -a * output
rm -Rf output/pages output/includes output/output output/legacy_pages output/*.php
