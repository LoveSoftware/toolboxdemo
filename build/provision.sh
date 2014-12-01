#!/bin/sh
sudo apt-get update
sudo apt-get install -y apache2 php5 php5-curl
sudo cp /vagrant/build/toolbox.conf /etc/apache2/sites-available/toolbox-demo.conf
sudo a2dissite 000-default.conf
sudo a2ensite toolbox-demo.conf
sudo a2enmod rewrite
sudo service apache2 restart