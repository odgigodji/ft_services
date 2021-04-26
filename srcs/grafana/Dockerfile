FROM alpine:3.11.7

RUN apk update && apk upgrade
RUN apk add wget libc6-compat vim supervisor

RUN wget -c https://dl.grafana.com/oss/release/grafana-7.5.4.linux-amd64.tar.gz
RUN tar -C . -xzf grafana-7.5.4.linux-amd64.tar.gz && rm -rf grafana-7.5.4.linux-amd64.tar.gz
RUN mv grafana-7.5.4 grafana
RUN chmod +x -R grafana
RUN mv grafana/bin/grafana-server /usr/local/bin

COPY ./supervisor.conf /etc/supervisor.conf
COPY ./grafana.db /grafana/data/
RUN chmod 777 /grafana/data/grafana.db

EXPOSE 3000

CMD /usr/bin/supervisord -c /etc/supervisor.conf 
