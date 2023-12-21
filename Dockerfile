FROM sail:8.2

RUN apt-get update && apt-get install -y \
    libzip-dev \
    zip

RUN a2enmod rewrite

RUN docker-php-ext-install pdo pdo_mysql zip

ENV APACHE_DOCUMENT_ROOT=/var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

COPY . /var/www/html

WORKDIR /var/www/html

RUN chmod -R 775 storage \
    && chown -R sail:sail storage

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN composer install

RUN php artisan key:generate

RUN php artisan migrate

RUN php artisan db:seed

RUN php artisan storage:link