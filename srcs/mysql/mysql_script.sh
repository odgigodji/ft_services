rc default
/etc/init.d/mariadb setup
/etc/init.d/mariadb start

mysql -u root <<MYSQL_SCRIPT
CREATE DATABASE wordpress_db;
CREATE USER 'user'@'%' IDENTIFIED BY 'user';
GRANT ALL PRIVILEGES ON wordpress_db.* TO 'user';
FLUSH PRIVILEGES; 
MYSQL_SCRIPT

mysql -u root wordpress_db < ./wordpress_db.sql
/etc/init.d/mariadb stop
/usr/bin/supervisord -c /etc/supervisor.conf
