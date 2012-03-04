# Freenet Website Staging

Scripts and translations from which the [Freenet website](https://freenetproject.org) is generated.

## Requirements

 - Bash
 - PHP5-CGI `aptitude install php5-cgi`

## Usage

Run `make-pages.sh`.

## Deploying

Push to the master branch website-official repository:
	git push git@github.com:freenet/website-official.git master
Copy the contents of output/ to the web server document root.
	chown -R 1019.1016 output
	rsync rsync -rvz --owner --group --numeric-ids --delete output/ freenetproject.org:/var/www/freenet-website
