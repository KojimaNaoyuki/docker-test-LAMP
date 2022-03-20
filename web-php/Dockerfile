FROM php:7.3-apache

# コマンドを連続して記述したい場合は \ && で区切る
RUN docker-php-ext-install pdo_mysql \
    && docker-php-ext-enable pdo_mysql

# COPY コピー元ファイル コピー先ディレクトリ
COPY ./php.ini /usr/local/etc/php/