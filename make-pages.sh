#!/bin/bash
rm -Rf output
(ls pages/en/ | sed -n "s/\\(.*\\)\.php/\\1/p") | (mkdir output; while read x; do ./make-static-page.sh "$x" > output/${x}.html; done)
(ls pages/fr/ | sed -n "s/\\(.*\\)\.php/\\1/p") | (mkdir output/fr; while read x; do ./make-static-page-fr.sh "$x" > output/fr/${x}.html; done)
cp -a * output
rm -Rf output/pages output/includes
rm output/*.php
