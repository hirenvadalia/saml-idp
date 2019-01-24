FROM php:7.2-apache
MAINTAINER Hiren Vadalia

# Utilities
RUN apt-get update && \
    apt-get -y install apt-transport-https git curl vim --no-install-recommends && \
    rm -r /var/lib/apt/lists/*

# SimpleSAMLphp
ARG SSP_VERSION=1.16.3
RUN curl -s -L -o /tmp/simplesamlphp.tar.gz https://github.com/simplesamlphp/simplesamlphp/releases/download/v$SSP_VERSION/simplesamlphp-$SSP_VERSION.tar.gz && \
    tar xzf /tmp/simplesamlphp.tar.gz -C /tmp && \
    rm -f /tmp/simplesamlphp.tar.gz  && \
    cd / && \
    rm -rf /var/www && \
    mv /tmp/simplesamlphp-* /var/www && \
    touch /var/www/modules/exampleauth/enable
COPY config/config.php /var/www/config
COPY config/authsources.php /var/www/config
COPY config/saml20-sp-remote.php /var/www/metadata
COPY config/server.crt /var/www/cert/
COPY config/server.pem /var/www/cert/

# Apache
COPY config/ports.conf /etc/apache2
COPY config/simplesamlphp.conf /etc/apache2/sites-available
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf && \
    a2enmod headers && \
    a2dissite 000-default.conf && \
    a2ensite simplesamlphp.conf

# Set work dir
WORKDIR /var/www

# General setup
EXPOSE 8082
