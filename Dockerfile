FROM ubuntu:14.04
MAINTAINER Mike Bertram <contact@crystalsource.de>


# Non interactive
ENV DEBIAN_FRONTEND noninteractive

# Install Lamp (php 5.6)
RUN apt-get update && apt-get -y upgrade
RUN apt-get -y install software-properties-common
RUN add-apt-repository ppa:ondrej/php5-5.6
RUN apt-get update && apt-get -y install python-software-properties
RUN apt-get -y --force-yes install supervisor openssh-server git apache2 vim curl libapache2-mod-php5 php5 php5-mysql mysql-server php5-gd

# SSHD
RUN mkdir -p /var/lock/apache2 /var/run/apache2 /var/run/sshd /var/log/supervisor
RUN echo 'root:crystal' | chpasswd
RUN sed -i 's/PermitRootLogin without-password/PermitRootLogin yes/' /etc/ssh/sshd_config

# SSH login fix. Otherwise user is kicked off after login
RUN sed 's@session\s*required\s*pam_loginuid.so@session optional pam_loginuid.so@g' -i /etc/pam.d/sshd

ENV NOTVISIBLE "in users profile"
RUN echo "export VISIBLE=now" >> /etc/profile

# Enable apache mods.
RUN a2enmod php5
RUN a2enmod rewrite

# Update the PHP.ini file, enable <? ?> tags and quieten logging.
#RUN sed -i "s/short_open_tag = Off/short_open_tag = On/" /etc/php/5.0/apache2/php.ini
#RUN sed -i "s/error_reporting = .*$/error_reporting = E_ERROR | E_WARNING | E_PARSE/" /etc/php/7.0/apache2/php.ini

# Manually set up the apache environment variables
ENV APACHE_RUN_USER www-data
ENV APACHE_RUN_GROUP www-data
ENV APACHE_LOG_DIR /var/log/apache2
ENV APACHE_LOCK_DIR /var/lock/apache2
ENV APACHE_PID_FILE /var/run/apache2.pid

# Copy Scripts
ADD script /opt/docker
RUN chmod 0755 /opt/docker/*.sh

# MySQL
ADD conf/mysql/my.cnf /etc/mysql/conf.d/my.cnf
RUN /opt/docker/config-mysql.sh


# Supervisor
ADD conf/supervisor/apache.conf /etc/supervisor/conf.d/supervisor-apache2.conf
ADD conf/supervisor/mysql.conf /etc/supervisor/conf.d/supervisor-mysql.conf
ADD conf/supervisor/ssh.conf /etc/supervisor/conf.d/supervisor-ssh.conf


# EXPOSE Apache
EXPOSE 80

# EXPOSE MySQL
EXPOSE 3306

# EXPOSE SSH
EXPOSE 22

# Copy Shop-Datadocker
ADD shop/ce499 /var/www/oxid

# Copy lib files
ADD libs/zend /opt/php

# Configure zend-guard
RUN echo "" >> /etc/php5/apache2/php.ini
RUN echo "[Zend]" >> /etc/php5/apache2/php.ini
RUN echo "zend_extension=/opt/php/ZendGuardLoader56x64.so" >> /etc/php5/apache2/php.ini

# Configure vhost
ADD conf/apache/vhost.conf /etc/apache2/sites-enabled/000-default.conf

# Set file rights
RUN chmod 0777 /var/www/oxid/tmp
RUN chmod 0777 /var/www/oxid/log
RUN chmod 0777 /var/www/oxid/export
RUN chmod 0777 /var/www/oxid/out/pictures
RUN chmod 0777 /var/www/oxid/out/media
RUN chmod 0777 /var/www/oxid/.htaccess
RUN chmod 0777 /var/www/oxid/config.inc.php
RUN chown -Rf www-data:www-data /var/www/oxid

# Restart services
RUN service apache2 start
RUN service mysql start

# run bash
CMD ["/opt/docker/run.sh"]