FROM alpine:3.11.7

RUN apk update && apk upgrade
RUN apk add openssl wget libc6-compat vim
RUN apk add vsftpd supervisor

RUN openssl req -newkey rsa:2048 -x509 -sha256 -days 30 -nodes -out /etc/ssl/certs/vsftpd_cert.crt -keyout /etc/ssl/private/vsftpd_pub.key -subj "/C=RU/ST=TATARSTAN/L=KAZAN/O=Security/OU=IT Department/CN=localhost"

RUN mkdir -p /etc/ftps/namerei
RUN adduser --home=/etc/ftps/namerei -D namerei
RUN echo "namerei:namerei" | chpasswd

RUN mkdir -p /etc/vsftpd

COPY vsftpd.conf ./etc/vsftpd/vsftpd.conf
COPY ./supervisor.conf /etc/supervisor.conf

EXPOSE 21 42000

CMD ./usr/bin/supervisord -c /etc/supervisor.conf
