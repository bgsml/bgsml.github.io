#!/bin/sh
umask 0027
PHPRC=.
###RIT_new-web_LD_LIBRARY_PATH_not_needed###LD_LIBRARY_PATH=/usr/local/lib:${LD_LIBARRY_PATH}

export PHPRC
###RIT_new-web_LD_LIBRARY_PATH_not_needed###export LD_LIBRARY_PATH

exec /usr/local/php5/bin/php-cgi

