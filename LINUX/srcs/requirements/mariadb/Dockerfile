FROM debian:buster
RUN apt update
RUN apt upgrade -y
RUN apt install -y vim mariadb-server procps



COPY /tools/script.sh /tmp
RUN chmod 755 /tmp/script.sh
COPY tools/50-server.cnf /tmp
EXPOSE 3306

RUN mkdir -p mariadb

ENTRYPOINT [ "/bin/bash", "/tmp/script.sh" ]
