<p align="center"><img width="150" height="150" src="https://invoiceneko.blob.core.windows.net/assets/invoiceneko-circle.png"></p>

<p align="center">
<a href="https://github.com/poowf/invoiceneko/releases"><img src="https://img.shields.io/github/release/poowf/invoiceneko.svg?style=flat-square" alt="Release"></a>
<a href="https://travis-ci.org/poowf/invoiceneko"><img src="https://img.shields.io/travis/poowf/invoiceneko/master.svg?style=flat-square" alt="Build Status"></a>
<a href="https://github.com/poowf/invoiceneko/blob/master/LICENSE"><img src="https://img.shields.io/badge/license-AAB-teal.svg?style=flat-square" alt="License"></a>
</p>

# Introduction

An open-source invoicing system built on a modern backend and developed for anyone who needs to generate out an invoice and manage clients

## Setup and Deployment
```bash
cp .env.example .env
composer install
npm install
npm run dev
php artisan key:generate
php artisan migrate
php artisan db:seed
php artisan storage:link
php artisan serve --host 0.0.0.0
```

## Security
If you discover a security vulnerability within this application, please send an e-mail to Zane J. Chua at zane@poowf.com. All security vulnerabilities will be addressed promptly.

## License

Copyright 2018 Zane J. Chua

This project is licensed under the Attribution Assurance License, please refer to the LICENSE file for more details
