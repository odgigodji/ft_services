FROM alpine:3.11.7

RUN apk update && apk upgrade
RUN apk add nginx supervisor wget libc6-compat openssl vim
RUN apk add --no-cache php7 php7-fpm php7-mysqli php7-curl php7-json php7-gd php7-intl php7-mbstring php7-soap php7-xml php7-xmlrpc php7-zip php7-iconv php7-phar php7-session

RUN wget -c https://files.phpmyadmin.net/phpMyAdmin/5.1.0/phpMyAdmin-5.1.0-all-languages.tar.gz
RUN tar -xvf phpMyAdmin-5.1.0-all-languages.tar.gz && rm -rf phpMyAdmin-5.1.0-all-languages.tar.gz
RUN mv phpMyAdmin-5.1.0-all-languages ./var/www/phpmyadmin

RUN mkdir -p /run/nginx
RUN mkdir -p var/www/phpmyadmin/tmp
RUN chmod 777 var/www/phpmyadmin/tmp
COPY ./config.inc.php ./var/www/phpmyadmin/config.inc.php
COPY ./nginx_conf ./etc/nginx/conf.d/default.conf
COPY ./supervisor.conf /etc/supervisor.conf

EXPOSE 5000

CMD /usr/bin/supervisord -c /etc/supervisor.conf
