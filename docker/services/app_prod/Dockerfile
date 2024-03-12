# @todo 本番環境の設定をする
# app/Dockerfile
FROM php:8.2-fpm

# 必要なパッケージのインストール
RUN apt-get update && apt-get install -y \
  git \
  curl \
  libpng-dev \
  libonig-dev \
  libxml2-dev \
  zip \
  unzip

# Laravelで必要なPHP拡張をインストール
RUN docker-php-ext-install pdo_mysql

# Composerのインストール
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Node.jsとnpmのインストール
RUN curl -sL https://deb.nodesource.com/setup_14.x | bash -
RUN apt-get install -y nodejs

CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]

WORKDIR /var/www
