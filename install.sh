#!/usr/bin/env bash

osType=$(uname)

if [[ "$osType" == 'Linux' ]]; then
   sudo chmod -R 777 ./
fi

echo -e "\033[32mCopy .env file...\033[0m"

php -r "file_exists('.env') || copy('.env.example', '.env');"
echo "-----------------------------------------"

echo -e "\033[32mNpm version:\033[0m"
npm -v
echo "-----------------------------------------"

echo -e "\033[32mPHP version:\033[0m"
php -v
echo "-----------------------------------------"

echo -e "\033[32mCurrent enable PHP Modules:\033[0m"
php -m
echo "-----------------------------------------"

echo -e "\033[32mSelf-update composer.phar...\033[0m"
php composer.phar self-update
echo "-----------------------------------------"

echo -e "\033[32mInstall vendor packages...\033[0m"
php composer.phar update
echo "-----------------------------------------"

echo -e "\033[32mStarting install Botble CMS...\033[0m"
php artisan cms:install