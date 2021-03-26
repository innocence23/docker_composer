FROM php:7.2-fpm

LABEL maintainer="zyf"

ENV TZ=Asia/Shanghai

#ADD https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions /usr/local/bin/
ADD install-php-extensions /usr/local/bin/

# Extensions Installation:
# RUN docker-php-ext-install \
# 用官方三方安装扩展 https://github.com/mlocati/docker-php-extension-installer
RUN chmod +x /usr/local/bin/install-php-extensions && sync && \
        install-php-extensions \
        bcmath \
        pdo_mysql \
        mysqli \
        sockets \
        gd \
        pcntl \
        opcache \
        zip \
        redis \
        mongodb \
        memcached \
        swoole



## Install composer and change it's cache home && repo.packagist
RUN curl -o /usr/local/bin/composer https://mirrors.aliyun.com/composer/composer.phar \
    && chmod +x /usr/local/bin/composer && composer config -g repo.packagist composer https://mirrors.aliyun.com/Composer


EXPOSE 9000
CMD ["php-fpm"]