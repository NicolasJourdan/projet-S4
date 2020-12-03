FROM php:7.4-fpm

# Add composer
RUN apt-get update \
    && curl -o /tmp/composer-setup.php https://getcomposer.org/installer \
    && curl -o /tmp/composer-setup.sig https://composer.github.io/installer.sig \
    # Make sure we're installing what we think we're installing!
    && php -r "if (hash('SHA384', file_get_contents('/tmp/composer-setup.php')) !== trim(file_get_contents('/tmp/composer-setup.sig'))) { unlink('/tmp/composer-setup.php'); echo 'Invalid installer' . PHP_EOL; exit(1); }" \                                                                                                                                                                                                            && php /tmp/composer-setup.php --no-ansi --install-dir=/usr/local/bin --filename=composer \
    && rm -f /tmp/composer-setup.* \
    && chmod +x /usr/local/bin/composer

# Add apt packages
RUN apt-get install -y \
    sudo \
    wget \
    vim \
    git

# Unblock php installation
RUN rm /etc/apt/preferences.d/no-debian-php

