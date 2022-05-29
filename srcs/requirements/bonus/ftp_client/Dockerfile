FROM debian:buster
RUN apt update
RUN apt upgrade -y
RUN apt install -y vim ftp

COPY /tools/script.sh /tmp
RUN chmod 755 /tmp/script.sh



