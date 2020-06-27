# University Simple App

#### Setup

-   Clone this repository
-   Make new database "uninersity"
-   Setup .env
-   run this syntax

    ```sh
    $ composer install
    $ npm install && npm run dev
    $ php artisan migrate --seed
    $ php artisan cache:clear
    $ php artisan config:clear
    $ php artisan passport:install --force
    $ php artisan config:cache
    $ php artisan key:generate

    $ php artisan vendor:publish --tag=charts_config
    ```

#### Run

-   run = php artisan serve
-   Login with this
    -   email : admin@univesity.com
    -   password : adminadmin
