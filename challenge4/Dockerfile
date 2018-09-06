FROM nickistre/ubuntu-lamp

RUN apt-get update -y

RUN rm /var/www/html/index.html /var/www/html/phpinfo.php

COPY ./index.html /var/www/html/

COPY ./challenge4.php /var/www/html/

COPY ./lib.php /var/www/html/

COPY ./start.sh /start.sh

WORKDIR /var/www/html/

RUN chown www-data:www-data /var/www/html/* -R

RUN chmod -R 755 /var/www/html/

RUN chmod +x /start.sh

RUN service apache2 restart

EXPOSE 80

