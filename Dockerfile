FROM ubuntu:14.04

RUN apt-get -y update
RUN apt-get -y install php5-cli

ADD . /var/www

WORKDIR /var/www

CMD php /var/www/app/console dockertest:hello-world
