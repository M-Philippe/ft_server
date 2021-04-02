FROM debian:10

RUN apt-get update -y
RUN apt-get -y install nginx vim nano wget mariadb-server mariadb-client unzip ssl-cert php-fpm
RUN cd /tmp &&\
	wget https://files.phpmyadmin.net/phpMyAdmin/4.9.3/phpMyAdmin-4.9.3-all-languages.zip &&\
	unzip * &&\
	mv  phpMyAdmin-4.9.3-all-languages phpmyadmin &&\
	mv phpmyadmin /var/www/html
RUN DEBIAN_FRONTEND=noninteractive apt-get install --no-install-recommends --no-install-suggests -y php php-cgi php-mysqli php-pear php-mbstring php-gettext libapache2-mod-php php-common php-phpseclib php-mysql
RUN wget http://fr.wordpress.org/latest-fr_FR.tar.gz && tar -xf latest-fr_FR.tar.gz && mv wordpress /var/www/html && rm latest-fr_FR.tar.gz
RUN mkdir s_index

ADD /srcs/default /etc/nginx/sites-available
ADD /srcs/script.sh /
ADD /srcs/www.conf /etc/php/7.3/fpm/pool.d/
ADD /srcs/wp-config.php/ /var/www/html/wordpress/
ADD /srcs/index_off.sh /s_index
ADD /srcs/default_off /s_index
ADD /srcs/index_on.sh /s_index
ADD /srcs/default /s_index

CMD bash script.sh
