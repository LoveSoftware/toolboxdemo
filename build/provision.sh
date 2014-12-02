#!/bin/sh

# Obligatory Update
sudo apt-get update

# Install PHP5.6 + Apache 2
sudo apt-get install -y apache2 php5 php5-dev php5-curl
sudo cp /vagrant/build/toolbox.conf /etc/apache2/sites-available/toolbox-demo.conf
sudo a2dissite 000-default.conf
sudo a2ensite toolbox-demo.conf
sudo a2enmod rewrite

# Install XDEBUG
sudo pecl install xdebug
sudo cp /vagrant/build/xdebug.ini /etc/php5/mods-available/xdebug.ini
sudo php5enmod xdebug

# Install XHPROF
sudo apt-get install -y graphviz
sudo cp /vagrant/build/xhprof.so /usr/lib/php5/20121212/xhprof.so
sudo cp /vagrant/build/xhprof.ini /etc/php5/mods-available/xhprof.ini
sudo php5enmod xhprof

sudo service apache2 restart

