#!/bin/bash
set -o errexit
shopt -s extglob
echo -e "\nResetting the Mtime of files..."
git log --name-only --date=iso --reverse --pretty=format:%at "$@"| perl -00ln -e '($d,@f)=split/\n/;$d{$_}=$d for grep{-e}@f' -e '}{utime undef,$d{$_},$_ for keys%d'
echo -e "\ngenerating the website..."
rm -Rf output
mkdir output
for lang in en es fr zh-cn; do
    (ls -1 "pages/$lang/" | sed -n "s/\\(.*\\)\.php/\\1/p") | (while read x; do ./make-static-page.sh "$lang" "$x" > "output/${x}.html.$lang"; done)
done
cp -a !(pages|includes|output|legacy_pages|*.php|*.sh|README.md) output
echo "done."
