FROM ghcr.io/garage-isep/herogu-back/herogu-php-base

USER root

COPY ./docker/nginx.conf /etc/nginx/nginx.conf

COPY --chown=nginx:www-data --chmod=777 . /var/www/html

LABEL ORIGIN herogu.garageisep.com

EXPOSE 80
LABEL org.opencontainers.image.source https://github.com/stanislas-scibilia/app