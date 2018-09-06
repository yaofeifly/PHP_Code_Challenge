#!/bin/bash

chown www-data:www-data /var/www/html -R

usermod -d /var/lib/mysql/ mysql

chown -R mysql:mysql /var/lib/mysql

service mysql restart

mysqld_safe --skip-grant-tables&
sleep 5

mysql -uroot -e "use mysql;UPDATE user SET authentication_string=password('2wsx3edctf') WHERE user='root';FLUSH PRIVILEGES;"

service mysql restart

mysql -uroot -p2wsx3edctf < /tmp/interest.sql

#sed -i "s/xxxxxx/$1/" /var/www/html/challenge6.php

cd /var/www/html;chown -R root:root .;

cd /var/www/html/

source /etc/apache2/envvars
tail -F /var/log/apache2/* &
exec apache2 -D FOREGROUND
service apache2 start
