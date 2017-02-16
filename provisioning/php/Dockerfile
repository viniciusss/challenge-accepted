FROM php:7.1-apache

RUN pecl install redis-3.1.0 \
    && docker-php-ext-enable redis

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin/ --filename=composer

ADD ./apache.conf /etc/apache2/sites-available/000-default.conf

RUN mkdir -p /var/app-challenge/logs
RUN mkdir -p /var/app-challenge/cache
RUN chown -R www-data:www-data /var/app-challenge/cache && chmod 777 /var/app-challenge/cache
RUN chown -R www-data:www-data /var/app-challenge/logs && chmod 777 /var/app-challenge/logs

CMD usermod -u 1000 www-data \
	&& cd /var/www/html \
    && composer install && rm -rf /var/app-challenge/* /var/app-challenge/* \
    && apache2-foreground