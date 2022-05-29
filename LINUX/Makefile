NAME = inception
START_PATH = ./srcs/

all: purge setup reload

setup:
	@ cd ./srcs/requirements/tools && sudo bash script_hosts.sh
	
stop:
	@ cd $(START_PATH) && sudo docker-compose down;

start:  
	@ cd $(START_PATH) &&  sudo docker-compose up -d;

clean: stop
	@ cd $(START_PATH) && sudo docker system prune -a; 

purge: clean
	@ sudo rm -Rf ~/data/;

reload: 
	@ mkdir ~/data;
	@ mkdir ~/data/mariadb;
	@ cd $(START_PATH) &&  sudo docker-compose up -d; 

 

.PHONY: setup stop clean purge reload all 
