FROM alpine:3.11.7

RUN apk update && apk upgrade
RUN apk add nginx supervisor wget libc6-compat
RUN apk add --no-cache php7 php7-json php7-fpm php7-mysqli php7-gd php7-curl php7-intl  php7-soap php7-xml php7-xmlrpc php7-mbstring php7-zip php7-iconv php7-phar php7-iconv php7-session

RUN mkdir -p /run/nginx

RUN wget -c https://wordpress.org/latest.tar.gz
RUN tar -xvf latest.tar.gz && rm -rf latest.tar.gz
RUN mv wordpress ./var/www/wordpress

COPY ./nginx_conf ./etc/nginx/conf.d/default.conf
COPY ./wp-config.php ./var/www/wordpress

COPY ./supervisor.conf /etc/supervisor.conf

EXPOSE 5050

CMD /usr/bin/supervisord -c /etc/supervisor.conf
