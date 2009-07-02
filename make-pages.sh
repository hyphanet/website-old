#!/bin/bash
rm -Rf output
(ls pages/en/ | sed -n "s/\\(.*\\)\.php/\\1/p") | (mkdir output; while read x; do ./make-static-page.sh "$x" > output/${x}.html; done)
cp -a image papers ss output
