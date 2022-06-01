<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Contexte
Cette API est réalisée avec le framework Laravel.
Cette API renvoie des informations liées aux jeux Animal Crossing : poissons, insectes, créatures marines, villageois, etc...

## Initialisation

Générer la clé : `php artisan key:generate`

Lancer les migrations avec les seeders : `php artisan migrate --seeder`
Relancer les seeders : `php artisan migrate:refresh --seed`

Se baser sur le .env.example pour des configurations si nécessaire, comme l'accès à la base de données (DB_CONNECTION, DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME, DB_PASSWORD)
Ajouter dans le .env la variable `API_KEY_NOOKI` avec la clé associée.

Lancer le serveur : `php artisan serve`

## Equipe
Logan LE SAUX - logan.lesaux@ynov.com
Nathanaël ALLARD - nathanael.allard@ynov.com
LUCA PILLONI - luca.pilloni@ynov.com
LYES SOUIFI - lyes.souifi@ynov.com

