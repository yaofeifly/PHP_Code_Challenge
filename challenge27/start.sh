#!/bin/bash

#sed -i "s/xxxxxx/$1/" /var/www/html/index.php

/usr/sbin/apache2ctl -D FOREGROUND
