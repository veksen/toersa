#!/usr/bin/env bash

sudo apt-get update
sudo apt-get install -y apache2
if ! [ -L /var/www ]; then
  sudo rm -rf /var/www
  sudo ln -fs /vagrant /var/www
fi

sudo apt-get install -y php5 libapache2-mod-php5 php5-mcrypt