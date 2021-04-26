minikube stop
minikube delete
minikube start --driver=virtualbox --cpus=4 --memory=2G --disk-size=5G
minikube addons enable metallb
eval $(minikube docker-env)

#if ip not given
#docker pull metallb/speaker:v0.8.2
#docker pull metallb/controller:v0.8.2

kubectl apply -f ./srcs/configmap.yaml

#nginx wordpress phpmyadmin mysql
docker build -t nginx_image ./srcs/nginx
kubectl apply -f ./srcs/nginx/nginx.yaml

#docker build -t wp_image ./srcs/wordpress
#kubectl apply -f ./srcs/yaml/wordpress.yaml

#docker build -t php_image ./srcs/phpmyadmin
#kubectl apply -f ./srcs/yaml/phpMA.yaml

#docker build -t mysql_image ./srcs/mysql
#kubectl apply -f ./srcs/yaml/mysql.yaml

minikube dashboard
