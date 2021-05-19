# ft_services

![project_img](https://i.ibb.co/q0N7dC4/project-img.jpg)

Этот проект знакомит нас с концепцией кластеризации и учит, как использовать технологии Kubernetes и Docker вместе.
Мы будем использовать Kubernetes для реализации инфраструктуры с разными сервисами, поэтому мы установим кластер, который группирует несколько сервисных контейнеров. Каждая служба работает в выделенном контейнере, и контейнеры имеют то же имя, что и связанная служба. По соображениям производительности контейнеры построены на `` Alpine Linux ``.

На машине должен быть устновлен kubernetes, docker и minikube

### Как использовать

Запусть скрипт: 

```
./setup.sh
```

### Статьи и источники:
[Video about kubernetes](https://www.youtube.com/watch?v=X48VuDVv0do&ab_channel=TechWorldwithNana)

[Video about docker](https://www.youtube.com/watch?v=3c-iBn73dDE&ab_channel=TechWorldwithNana)

[wp-config](https://www.hostinger.ru/rukovodstva/wp-config-php/)

[minikube](https://minikube.sigs.k8s.io/docs/handbook/)
