# Laravel app
FROM node:18 AS vite

WORKDIR /app
COPY . .
RUN npm install && npm run build

# Final app image
FROM richarvey/nginx-php-fpm:latest

WORKDIR /var/www/html
COPY . .

# Copy built Vite assets
COPY --from=vite /app/public/build ./public/build

# Image config
ENV SKIP_COMPOSER 1
ENV WEBROOT /var/www/html/public
ENV PHP_ERRORS_STDERR 1
ENV RUN_SCRIPTS 1
ENV REAL_IP_HEADER 1

# Laravel config
ENV APP_ENV production
ENV APP_DEBUG false
ENV LOG_CHANNEL stderr

# Allow composer to run as root
ENV COMPOSER_ALLOW_SUPERUSER 1

CMD ["/start.sh"]
