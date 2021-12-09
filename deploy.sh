#!/bin/bash

SITENAME="finikosupport.com"
cd /var/www/$SITENAME/data/www/$SITENAME;

. ~/.bashrc

cd /var/www/$SITENAME/data/www/$SITENAME;
git pull;
composer install;
cd web/app/themes/sage;
composer install && yarn;
yarn build:production;
