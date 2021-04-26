FROM alpine:3.11.7

RUN apk update && apk upgrade
RUN apk add wget libc6-compat vim
RUN apk add influxdb supervisor 

#get telegraf and set
RUN wget -c https://dl.influxdata.com/telegraf/releases/telegraf-1.18.1_linux_amd64.tar.gz
RUN tar xf telegraf-1.18.1_linux_amd64.tar.gz && rm -rf telegraf-1.18.1_linux_amd64.tar.gz
RUN cp -r telegraf-1.18.1/* ./ && rm -rf telegraf-1.18.1
RUN telegraf -sample-config --input-filter docker --output-filter influxdb > /etc/telegraf/telegraf.conf

RUN mkdir -p /etc/influxdb
RUN mkdir -p /var/lib/influxdb

COPY ./supervisor.conf /etc/supervisor.conf

EXPOSE 8086

CMD /usr/bin/supervisord -c /etc/supervisor.conf 