#apt install -y mariadb-server 



rm /etc/mysql/mariadb.conf.d/50-server.cnf 

# Swith off the bind address 
mv tmp/50-server.cnf /etc/mysql/mariadb.conf.d




if [ ! -d /mariadb/wordpress ];
then

mysql_install_db --user=mysql --datadir='/mariadb'
cat << EOF > /tmp/init.sql
CREATE DATABASE $WORDPRESS_DB_NAME;
CREATE USER '$WORDPRESS_DB_USER'@'%' IDENTIFIED BY '$WORDPRESS_DB_PASSWORD';
GRANT ALL PRIVILEGES ON *.* TO '$WORDPRESS_DB_USER'@'%' WITH GRANT OPTION;
FLUSH PRIVILEGES;
ALTER USER 'root'@'localhost' IDENTIFIED BY '$DB_ROOT_PASS';
EOF
cd '/usr' ; /usr/bin/mysqld_safe --datadir='/mariadb' --init-file=/tmp/init.sql

else
cd '/usr' ; /usr/bin/mysqld_safe --datadir='/mariadb'

fi


