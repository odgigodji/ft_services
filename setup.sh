minikube stop
minikube delete

minikube start --driver=virtualbox --cpus=4 --memory=3G --disk-size=10G
echo "\033[32m\n-------------------------------minikbe is start-------------------------------------\n\033[0m"

minikube addons enable metallb
echo "\033[32m\n-------------------------------metallb is ready-------------------------------------\n\033[0m"

eval $(minikube docker-env)
echo "\033[32m\n-------------------------------docker-env is ready-------------------------------------\n\033[0m"

#if ip not given
#docker pull metallb/speaker:v0.8.2
#docker pull metallb/controller:v0.8.2

kubectl apply -f ./srcs/configmap.yaml

#nginx wordpress phpmyadmin mysql
docker build -t nginx_image ./srcs/nginx
kubectl apply -f ./srcs/nginx/nginx.yaml
echo "\033[32m\n-------------------------------nginx is ready-------------------------------------\n\033[0m"

docker build -t wordpress_image ./srcs/wordpress
kubectl apply -f ./srcs/wordpress/wordpress.yaml
echo "\033[32m\n-------------------------------wordpress is ready-------------------------------------\n\033[0m"

docker build -t mysql_image ./srcs/mysql
kubectl apply -f ./srcs/mysql/mysql.yaml
echo "\033[32m\n-------------------------------mysql is ready-------------------------------------\n\033[0m"

docker build -t phpmyadmin_image ./srcs/phpmyadmin
kubectl apply -f ./srcs/phpmyadmin/phpmyadmin.yaml
echo "\033[32m\n-------------------------------phpmyadmin is ready-------------------------------------\n\033[0m"

#influxdb grafana
docker build -t influxdb_image ./srcs/influxdb
kubectl apply -f ./srcs/influxdb/influxdb.yaml
echo "\033[32m\n-------------------------------influxdb is ready-------------------------------------\n\033[0m"

docker build -t grafana_image ./srcs/grafana
kubectl apply -f ./srcs/grafana/grafana.yaml
echo "\033[32m\n-------------------------------grafana is ready-------------------------------------\n\033[0m"

#ftps
docker build -t ftps_image ./srcs/ftps
kubectl apply -f ./srcs/ftps/ftps.yaml
echo "\033[32m\n-------------------------------ftps is ready-------------------------------------\n\033[0m";

echo "\033[32m----------------------------running dashboard-------------------------------\n\033[0m";
minikube dashboard
