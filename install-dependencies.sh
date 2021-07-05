#!/bin/bash

set -e

composer install
npm install
gulp

php artisan export
