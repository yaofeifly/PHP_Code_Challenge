FROM nickistre/ubuntu-lamp

RUN apt-get update -y

RUN rm /var/www/html/index.html

COPY ./index.html /var/www/html/

COPY ./challenge19.php /var/www/html/

#RUN mkdir /var/www/html/uploads

COPY ./flag.php /var/www/html/

COPY ./start.sh /start.sh

#RUN sed -i "s/allow_url_include = Off/allow_url_include = On/g" /etc/php5/apache2/php.ini

WORKDIR /var/www/html/

RUN chown www-data:www-data /var/www/html/* -R

RUN chmod -R 755 /var/www/html/

RUN chmod +x /start.sh

#RUN chmod -R 777 /var/www/html/uploads

RUN service apache2 restart

EXPOSE 80
