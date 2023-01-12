#!/bin/bash
set -e

echo "Deployment started ..."

# Enter maintenance mode or return true
# if already is in maintenance mode
(php artisan down) || true

# Pull the latest version of the app
git pull origin production

#  Install composer dependencies
~/nik-web.ru/bin/composer install --no-dev --no-interaction --prefer-dist --optimize-autoloader

# Install npm modules
/home/c69359/.nvm/versions/node/v19.4.0/bin/npm install

# Build front-end
/home/c69359/.nvm/versions/node/v19.4.0/bin/npm run build

# Run migration
php artisan migrate --force

# Clear the old cache
php artisan clear-compiled
# Recreate cache
php artisan optimize


# Exit maintenance mode
php artisan up

echo "Deployment finished!"