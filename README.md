# Space API

[![Tests](https://github.com/psychosomat/space-api/actions/workflows/tests.yml/badge.svg)](https://github.com/psychosomat/space-api/actions/workflows/tests.yml)
[![Lint](https://github.com/psychosomat/space-api/actions/workflows/lint.yml/badge.svg)](https://github.com/psychosomat/space-api/actions/workflows/lint.yml)
[![PHP Version](https://img.shields.io/badge/php-%5E8.2-blue.svg)](https://www.php.net/)
[![Laravel Version](https://img.shields.io/badge/laravel-%5E11.0-red.svg)](https://laravel.com/)
[![License](https://img.shields.io/badge/license-MIT-green.svg)](https://opensource.org/licenses/MIT)

A simple Laravel API with a basic frontend. This project was created for educational purposes and follows the steps from the "Ur First API" guide.

## Installation

1.  Clone the repository:
    ```bash
    git clone https://github.com/psychosomat/space-api.git
    cd space-api
    ```
2.  Install dependencies:
    ```bash
    composer install
    npm install
    ```
3.  Set up the environment:
    ```bash
    cp .env.example .env
    php artisan key:generate
    ```
4.  Create and seed the database:
    ```bash
    touch database/database.sqlite
    php artisan migrate --seed
    ```

## License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT). You are free to use, modify, and distribute the code.
