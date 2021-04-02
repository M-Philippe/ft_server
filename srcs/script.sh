service mysql start
service nginx start
service php7.3-fpm start
mysql -u root -e "CREATE DATABASE db_wordpress;"
mysql -u root -e "CREATE USER 'user'@'localhost' IDENTIFIED BY 'user';"
mysql -u root -e "GRANT ALL PRIVILEGES ON db_wordpress.* TO 'user'@'localhost';"
mysql -u root -e "FLUSH PRIVILEGES;"

while [ true ]
do true = true
done
