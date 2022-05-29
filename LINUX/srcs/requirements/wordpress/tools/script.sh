mkdir	/var/www
mkdir	/var/www/html
mv	/tmp/hello.html /var/www/html
mv  /tmp/info.php /var/www/html

wget https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
chmod +x wp-cli.phar
mv wp-cli.phar /usr/local/bin/wp




if [ ! -d /var/www/html/wordpress ];
then
mv  /tmp/wordpress /var/www/html/wordpress
mv	/tmp/adminer.php /var/www/html/
mkdir var/www/html/website
mv	/tmp/*		/var/www/html/website
sleep 30
wp config create --allow-root --dbname=$WORDPRESS_DB_NAME --dbuser=$WORDPRESS_DB_USER --dbpass=$WORDPRESS_DB_PASSWORD --dbhost=$WORDPRESS_DB_HOST --skip-check --path=/var/www/html/wordpress/
wp core install --allow-root --url=localhost/wordpress --title=INCEPTION --admin_user=$WP_USER_LOGIN_AD --admin_password=$WP_USER_PASS_AD --admin_email=$WP_USER_EMAIL_AD --path=/var/www/html/wordpress/
wp user create --allow-root $WP_USER_LOGIN_U $WP_USER_EMAIL_U --role=subscriber --user_pass=$WP_USER_PASS_U  --path=/var/www/html/wordpress
wp plugin install redis-cache --activate --path=/var/www/html/wordpress/ --allow-root
wp plugin activate redis-cache --path=/var/www/html/wordpress/ --allow-root
sed -i "56 i define('WP_REDIS_HOST', 'redis');" /var/www/html/wordpress/wp-config.php
wp redis --allow-root enable --path=/var/www/html/wordpress/
fi

service php7.3-fpm start
service php7.3-fpm stop
#chown -R www-data /var/www/*
#chmod -R 755 /var/www/*

php-fpm7.3 --nodaemonize
