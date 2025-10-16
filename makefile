
.PHONY: help

help:
	@grep -E '^[a-zA-Z_-]+:.*?## .*$$' $(MAKEFILE_LIST) | sort | awk 'BEGIN {FS = ":.*?## "}; {printf "\033[36m%-30s\033[0m %s\n", $$1, $$2}'

run_in_docker = sudo docker-compose run --rm --entrypoint $(1) app $(2)
artisan = $(call run_in_docker,./artisan,$(1))

install-php: initialize-docker ## Install php dependencies
	$(call run_in_docker,composer,install)

initialize: install-php ## Initialize project

build: ## Build container
	sudo docker-compose build

start: build ## Start app
	sudo docker-compose up

test: ## Run php test
	$(call run_in_docker,./vendor/bin/phpunit,--group unit-tests --process-isolation)

update-php: build ## Update php dependencies
	$(call run_in_docker,sh,-c 'COMPOSER_MEMORY_LIMIT=-1 composer update')
