rm -rf /etc/redis/redis.conf
mv /tmp/redis.conf /etc/redis/
service redis-server start