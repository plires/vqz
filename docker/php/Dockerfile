FROM php:8.1-fpm

RUN apt-get update && apt-get install -y \
        default-mysql-client \
        libcurl4-openssl-dev \
        msmtp \
        unzip \
        git \
    && docker-php-ext-install pdo pdo_mysql curl \
    && rm -rf /var/lib/apt/lists/*

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

COPY msmtprc /etc/msmtprc
RUN chmod 600 /etc/msmtprc \
    && echo "sendmail_path = /usr/bin/msmtp -t" > /usr/local/etc/php/conf.d/mail.ini

WORKDIR /var/www/html/sitio
