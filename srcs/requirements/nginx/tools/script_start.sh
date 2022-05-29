#!/bin/bash

openssl req -x509 -nodes -days 365 -newkey rsa:2048 -keyout /etc/ssl/private/nginx-selfsigned.key -out /etc/ssl/certs/nginx-selfsigned.pem -subj "/C=IT/ST=Italia/L=Rome/O=Roma42 Luiss/OU=ft_server/CN=fulloa-s"
