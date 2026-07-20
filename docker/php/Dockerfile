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
# PHPMailer's isSendmail() only trusts sendmail_path when the string contains
# "sendmail" (see PHPMailer.php ~line 979); otherwise it silently falls back
# to the hardcoded /usr/sbin/sendmail, ignoring msmtp entirely. Symlinking
# msmtp there covers both that fallback and the explicit ini path below.
# 644 (not 600): php-fpm workers run as www-data, not root, and need to read
# this file too. No credentials live in it (auth off), so this is safe.
RUN chmod 644 /etc/msmtprc \
    && ln -sf /usr/bin/msmtp /usr/sbin/sendmail \
    && echo "sendmail_path = /usr/sbin/sendmail -t" > /usr/local/etc/php/conf.d/mail.ini

WORKDIR /var/www/html/sitio
