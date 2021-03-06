#!/bin/bash


echo "Instalando....."

composer config repositories.basic '{"type": "path", "url": "./packages/clavel/basic/"}'

composer require clavel/basic:@dev --no-scripts --no-update

echo "Composer ...."
COMPOSER_MEMORY_LIMIT=-1 composer update

echo "Instalando ficheros"
php artisan vendor:publish --provider="Clavel\Basic\BasicServiceProvider" --force

echo "Composer ...."
composer dumpauto

echo "Base de datos ...."
php artisan migrate

echo "Instalando seeds ..."
php artisan db:seed --class=MenuSeeder
php artisan db:seed --class=BasicPermissionSeeder
php artisan db:seed --class=PageSeeder
php artisan db:seed --class=PageBasicSeeder



#echo "Packages"
# npm install

#echo "Plantillas admin"
#cd ./resources/libraries/admin/
#bower install --allow-root
#bower update --allow-root

#echo "Gulp admin"
#gulp

#cd ../../../
