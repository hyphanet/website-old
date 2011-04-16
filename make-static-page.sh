#!/bin/bash
LANG=${1}
PAGE=${2:-index}
PAGE=/$PAGE

(echo "<?php"; echo '$_REQUEST["lang"] = "'$LANG'";'; echo '$_REQUEST["rewritten"] = 1;'; echo -n '$_REQUEST["page"] = "'; echo -n $PAGE; echo "\";"; echo 'include "index.php";'; echo "?>") | php5 | (while read x; do if [[ $x == $'\r' ]]; then break; fi; done; cat)
