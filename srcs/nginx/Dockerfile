FROM alpine:3.11.7

RUN apk update && apk upgrade
RUN apk add nginx supervisor vim
RUN apk add openssl wget libc6-compat 

RUN openssl req -newkey rsa:2048 -x509 -sha256 -days 30 -nodes -out /etc/ssl/certs/certificate.crt -keyout /etc/ssl/certs/public.key -subj "/C=RU/ST=TATARSTAN/L=KAZAN/O=Security/OU=IT Department/CN=localhost"

RUN mkdir -p /run/nginx

COPY ./nginx_conf ./etc/nginx/conf.d/default.conf
COPY ./cat.png ./var/www
COPY ./start_page.html ./var/www
COPY ./supervisor.conf ./etc

EXPOSE 80 443

CMD /usr/bin/supervisord -c /etc/supervisor.conf
