
#!/bin/bash
PAGE=${1:-index}
PAGE=/$PAGE

(echo "<?php"; echo '$_REQUEST["lang"] = "fr";'; echo '$_REQUEST["rewritten"] = 1;'; echo -n '$_REQUEST["page"] = "'; echo -n $PAGE; echo "\";"; echo 'include "index.php";'; echo "?>") | php5-cgi | (while read x; do if [[ $x == $'\r' ]]; then break; fi; done; cat)