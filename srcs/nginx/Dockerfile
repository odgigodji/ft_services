FROM alpine:3.11.7

RUN apk update   
RUN apk upgrade                                               
RUN apk add nginx supervisor openssl wget 

RUN mkdir -p /run/nginx
COPY ./index.html var/www/index.html
COPY ./cat.png var/www/
COPY ./default.conf /etc/nginx/conf.d/default.conf
COPY ./supervisor.conf ./etc

RUN openssl req -newkey rsa:2048 -x509 -sha256 -days 30 -nodes -out /etc/ssl/certs/certificate.crt -keyout /etc/ssl/certs/public.key -subj "/C=RU/ST=TATARSTAN/L=KAZAN/O=Security/OU=IT Department/CN=localhost"

#RUN		apk add telegraf --repository http://dl-cdn.alpinelinux.org/alpine/edge/#community/ #--allow-untrusted --no-cache

#COPY	/srcs/telegraf.conf	/etc/telegraf/
#COPY	/srcs/nginx.html 	/var/www

COPY	./start.sh     .
RUN	chmod +x start.sh

EXPOSE 80 443 

CMD sh start.sh