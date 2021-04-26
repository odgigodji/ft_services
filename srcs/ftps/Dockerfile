FROM alpine:3.11.7

RUN apk update && app upgrade                                             
RUN apk add vsftpd openssl supervisor
RUN apk add telegraf --repository http://dl-cdn.alpinelinux.org/alpine/edge/community/ --allow-untrusted --no-cache

RUN openssl req -newkey rsa:2048 -x509 -sha256 -days 30 -nodes -out /etc/ssl/certs/certificate.crt -keyout /etc/ssl/certs/public.key -subj "/C=RU/ST=TATARSTAN/L=KAZAN/O=Security/OU=IT Department/CN=localhost"

COPY    ./supervisor.conf ./etc
COPY	/srcs/telegraf.conf /etc/telegraf/
COPY	/srcs/vsftpd.conf /etc/vsftpd/

EXPOSE 21 42000

CMD /usr/bin/supervisord -c /etc/supervisor.conf