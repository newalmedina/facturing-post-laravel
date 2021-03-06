#!/bin/bash

echo "Limpiando Codigo"
echo "https://github.com/squizlabs/PHP_CodeSniffer"

# Core
./vendor/bin/phpcbf -p --colors --standard=PSR2 --ignore=*/tests/*,*/Views/*,*/Translations/*,*/database/*,*/config/*,*/resources/* ./app ./packages


# modulos generales
# Contacto
#./vendor/bin/phpcbf -p --colors --standard=PSR2 --ignore=*/tests/*,*/Views/*,*/Translations/*,*/database/*,*/config/*,*/resources/* ./app/Modules/Contacto

# time tracker
#./vendor/bin/phpcbf -p --colors --standard=PSR2 --ignore=*/tests/*,*/Views/*,*/Translations/*,*/database/*,*/config/*,*/resources/* ./packages/clavel/timetracker/src

