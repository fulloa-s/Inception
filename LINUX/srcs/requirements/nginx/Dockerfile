FROM debian:buster
RUN apt update
RUN apt upgrade -y
RUN apt install -y nginx openssl vim

# CONFIGURE NGINX

COPY 	tools/default etc/nginx/sites-available/
RUN 	rm /etc/nginx/nginx.conf
COPY 	tools/nginx.conf etc/nginx/
RUN 	rm /etc/nginx/sites-enabled/default
RUN		ln -s /etc/nginx/sites-available/default /etc/nginx/sites-enabled/default

# SSL CERTIFICATE
RUN mkdir /etc/nginx/ssl
RUN chmod 700 /etc/nginx/ssl

RUN openssl req -x509 -nodes -days 365 -newkey rsa:2048 -keyout /etc/ssl/private/nginx-selfsigned.key -out /etc/ssl/certs/nginx-selfsigned.pem -subj "/C=IT/ST=Italia/L=Rome/O=Roma42 Luiss/OU=ft_server/CN=fulloa-s"



CMD ["nginx", "-g", "daemon off;"]