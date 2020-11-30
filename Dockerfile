FROM phpstorm/php-71-apache-xdebug-26
FROM composer
COPY . /var/www/html
WORKDIR /var/www/html

RUN apk add --no-cache zip libzip-dev
RUN docker-php-ext-configure zip
RUN docker-php-ext-install zip
RUN apk add --update php-mysqli
RUN apk add --update php-json
RUN docker-php-ext-install zip
RUN docker-php-ext-install mysqli
RUN docker-php-ext-install json

RUN composer install
EXPOSE 80
CMD ["/usr/sbin/apache2ctl", "-D", "FOREGROUND"]

