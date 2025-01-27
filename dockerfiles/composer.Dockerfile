FROM composer:latest

WORKDIR /var/www/withDocker

ENTRYPOINT ["composer", "--ignore-platform-reqs"]