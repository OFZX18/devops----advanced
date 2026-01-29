# Laravel Project

## Requirements

1. You must have [Git](https://git-scm.com/downloads) installed.
2. You must have [Docker Desktop](https://www.docker.com/products/docker-desktop) installed.
3. You must have [Visual Studio Code](https://code.visualstudio.com) installed
    1. You must have the [Dev Containers](https://marketplace.visualstudio.com/items?itemName=ms-vscode-remote.remote-containers) extension installed.

## Start the Docker containers

1. Open the project folder in VSCode.
2. Open the Command Palette with the `Ctrl + Shift + P` shortcut.
3. Run the command `Dev Containers: Rebuild and Reopen in container`.
4. From the Terminal window you can now run commands within the Docker container.

## Setup application

The first time you set up the application you have to run the following command from the Terminal window on the Docker container.

```shell
composer setup
```

This command will perform the following tasks:

- Install composer packages
- Generate `.env` file
- Generate an application key
- Migrate the database
- Install Node packages
- Build assets

If everything went fine you should now see a Laravel welcome page at http://localhost:8080

## Seed database

Fill the database by running the seeders.

```shell
php artisan db:seed
```

## Stop the Docker containers

1. Open the Command Palette with the `Ctrl + Shift + P` shortcut.
2. Run the command `Dev Containers: Reopen For Locally`.

## Connecting to the database

From PHP you can connect to the database using the following details:

```php
DB_HOST=db
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=laravel
DB_PASSWORD=laravel
```

Using MySQL Workbench using the following details:
```
Host: localhost
Port: 33067
Username: laravel
Password: laravel
Default schema: laravel
```

## Learing Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework. You can also check out [Laravel Learing Center](https://laravel.com/learn), where you will be guided through building a modern Laravel application.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.
