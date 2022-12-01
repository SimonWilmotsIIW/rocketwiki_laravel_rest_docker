#! /bin/bash
# Made by Simon Wilmots
docker exec rocketwiki bash -c 'php artisan migrate && php artisan db:seed'