# Todo List

This is a simple To-Do list web app made with Laravel, Vue, and TailwindCSS.

## Setup

First, install Laravel prerequisites as outlined in the [Laravel Docs](https://laravel.com/docs/9.x/installation).

Clone the repository

    git clone git@github.com:MattDorling/todolist.git

Switch to the repo folder

    cd todolist

Install all the dependencies using composer

    composer install

Copy the example env file and make the required configuration changes in the .env file

    cp .env.example .env

Generate a new application key

    php artisan key:generate

Run the database migrations (**Set the database connection in .env before migrating**)

    php artisan migrate

Start the local development server

    php artisan serve

You can now access the server at http://localhost:8000
