FROM ubuntu:16.04

RUN sed -i 's/archive.ubuntu.com/mirrors.ustc.edu.cn/g' /etc/apt/sources.list

RUN apt-get update
RUN apt-get install -y apache2 libapache2-mod-php7.0
RUN DEBIAN_FRONTEND=noninteractive apt-get install -y mysql-server-5.7
RUN apt-get install -y php7.0 php7.0-mysql php7.0-json
ADD challenge6.php /var/www/html/
ADD source.txt /var/www/html/
COPY index.html /var/www/html/index.html
COPY interest.sql /tmp/interest.sql
COPY start.sh /start.sh
RUN chmod +x /start.sh

EXPOSE 80
