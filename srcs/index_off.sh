rm /var/www/html/index.nginx-debian.html
mv default_off /../etc/nginx/sites-available/default
service nginx restart
