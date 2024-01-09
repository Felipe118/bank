# Use a imagem oficial do PHP 8.3 CLI
FROM php:8.3-cli

# Defina o diretório de trabalho no contêiner
WORKDIR /var/www/app

# Copie os arquivos do aplicativo para o contêiner
COPY . /var/www/app

# Instale as dependências do sistema necessárias para o Composer e o driver PDO PostgreSQL
RUN apt-get update \
    && apt-get install -y unzip libpq-dev \
    && rm -rf /var/lib/apt/lists/* \
    && docker-php-ext-install pdo_pgsql

# Instale as dependências do Composer (se necessário)
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
#RUN composer install

# Opcional: Configurações adicionais do PHP, se necessário
# RUN echo "date.timezone = America/São_Paulo" > /usr/local/etc/php/php.ini

# Comando padrão a ser executado quando o contêiner for iniciado
# CMD ["php", "-S", "0.0.0.0:8000"]