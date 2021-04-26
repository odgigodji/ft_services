FROM alpine:3.11.7

RUN apk update && apk upgrade
RUN apk add openrc mysql mysql-client vim
RUN apk add wget rsync supervisor libc6-compat mariadb

RUN mkdir -p /data/mysql
RUN chmod 777 /data

COPY wordpress_db.sql .
RUN chmod 777 /wordpress_db.sql

COPY ./mydb.cnf /etc/mysql/my.cnf
RUN mkdir -p /etc/mysql/mysql.conf.d

COPY ./supervisor.conf /etc/supervisor.conf
COPY ./mysql_script.sh .
RUN chmod 777 ./mysql_script.sh

EXPOSE 3306

CMD ./mysql_script.sh
