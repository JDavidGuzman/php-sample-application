# Sample PHP App Dockerized

This repo contains Dockerfiles for two containers, one for an SQL container with a predefined database, and one for a PHP App that interacts with it.

The images of this repo are on DockerHub, on the following repository: https://hub.docker.com/r/jdavidguzman/cloux-php-sample/tags

In order to run this up with docker-compose, it can be done with the following commands:

* command for running on the foreground: docker-compose up
* command for running on the background: docker-compose run -d --service-ports sample_php