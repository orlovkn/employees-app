FROM php:8.1-alpine

WORKDIR /app

RUN apk add --no-cache git \
	&& apk add --update busybox-suid supervisor autoconf

RUN docker-php-ext-configure pcntl --enable-pcntl \
    && docker-php-ext-install pcntl pdo_mysql

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

EXPOSE 8000/tcp

CMD app-start
