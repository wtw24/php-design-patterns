########################################################################################################################
### DEVELOPMENT
########################################################################################################################

up: docker-up
down: docker-down
init: docker-down prepare docker-pull docker-build docker-up

prepare:
	docker network create -d bridge backend || echo "ok"

docker-up:
	docker-compose up -d

docker-down:
	docker-compose down --remove-orphans

docker-pull:
	docker-compose pull

docker-build:
	docker-compose build


########################################################################################################################
### EXTERN
########################################################################################################################

### MySQL & PhpMyAdmin

db-init: db-down db-up

db-up:
	docker-compose -f ./docker/db/docker-compose.yml up -d

db-down:
	docker-compose -f ./docker/db/docker-compose.yml down --remove-orphans


### Mailcatcher

mailcatcher-init: mailcatcher-down mailcatcher-up

mailcatcher-up:
	docker-compose -f ./docker/mailcatcher/docker-compose.yml up -d

mailcatcher-down:
	docker-compose -f ./docker/mailcatcher/docker-compose.yml down --remove-orphans


########################################################################################################################
### TOOLS
########################################################################################################################

%:
	@:

workspace:
	docker run --rm --name workspace_ubuntu -it \
		-v $(shell pwd):/app \
		-v $(shell pwd)/_volumes/log:/log \
		${REGISTRY_ADDRESS}/workspace:ubuntu_18_04 bash

composer:
	docker-compose run --rm php-cli composer $(filter-out $@,$(MAKECMDGOALS))

bash:
	docker exec -it $(filter-out $@,$(MAKECMDGOALS)) bash

sh:
	docker exec -it $(filter-out $@,$(MAKECMDGOALS)) sh
