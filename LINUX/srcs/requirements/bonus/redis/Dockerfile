FROM debian:buster
RUN apt update
RUN apt upgrade -y
RUN apt install -y vim redis-server

COPY /tools/script.sh /tmp
RUN chmod 755 /tmp/script.sh
COPY /tools/redis.conf /tmp

ENTRYPOINT [ "/bin/bash", "/tmp/script.sh" ]