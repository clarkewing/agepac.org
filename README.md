# Agepac.org - public facing site

## Installation


Install `composer` using your favorite package manager. 
```bash
git clone https://github.com/clarkewing/agepac.org
cd agepac.org && composer install
cp .env.example .env
npm install && npm run dev
```

## Running locally

1. `php artisan key:generate`
2. `php artisan serve` and open http://localhost:8000.

Alternatively if you are on MacOS, you can install [Laravel herd](https://herd.laravel.com) (`brew install --cask herd`), and run 
1. `herd link` in the root directory of this repo
2. open http://agepac.org.test