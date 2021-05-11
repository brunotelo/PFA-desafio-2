FROM php:7.4-cli AS builder
WORKDIR /var/www
COPY . .

FROM php:7.4-fpm-alpine
WORKDIR /var/www
RUN rm -rf /var/www/html
COPY --from=builder /var/www .

RUN chown -R www-data:www-data /var/www
RUN ln -s public html

RUN docker-php-ext-install pdo pdo_mysql

RUN apk update && \
    apk upgrade && \
    apk add bash && \
    apk add wget

ENV DOCKERIZE_VERSION v0.6.1
RUN wget https://github.com/jwilder/dockerize/releases/download/$DOCKERIZE_VERSION/dockerize-linux-amd64-$DOCKERIZE_VERSION.tar.gz \
    && tar -C /usr/local/bin -xzvf dockerize-linux-amd64-$DOCKERIZE_VERSION.tar.gz \
    && rm dockerize-linux-amd64-$DOCKERIZE_VERSION.tar.gz

EXPOSE 9000

#CMD [ "php-fpm" ]