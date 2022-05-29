FROM debian:buster

RUN apt update
RUN apt upgrade -y
RUN apt install -y wget php-fpm php-mysql php-mbstring vim

# CONFIGURE PHP
RUN	 rm /etc/php/7.3/fpm/pool.d/www.conf
COPY /tools/www.conf /etc/php/7.3/fpm/pool.d/
COPY /tools/info.php /tmp
COPY /tools/index /tmp

COPY /tools/hello.html /tmp

# CONFIGURE WORDPRESS
RUN wget https://it.wordpress.org/latest-it_IT.tar.gz
RUN tar -xvf /latest-it_IT.tar.gz -C /tmp
RUN rm /latest-it_IT.tar.gz
# COPY /tools/wp-config.php /tmp
RUN rm /tmp/wordpress/wp-config-sample.php

RUN wget https://github.com/vrana/adminer/releases/download/v4.7.3/adminer-4.7.3.php
RUN mv adminer-4.7.3.php adminer.php
RUN mv adminer.php /tmp

COPY /tools/script.sh /tmp
RUN chmod 755 /tmp/script.sh

ENTRYPOINT [ "/bin/bash", "/tmp/script.sh" ]