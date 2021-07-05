#!/bin/bash

set -e

composer install
npm install
gulp

php artisan export

echo "www.pequimecanico.com.br" > dist/CNAME
 