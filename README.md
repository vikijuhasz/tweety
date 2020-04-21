## Tweety

### Description

A Twitter clone, called Tweety from the 'Laravel 6 From Scratch' series by Laracasts (https://laracasts.com/series/laravel-6-from-scratch). 

### Installation and startup:

- Install XAMPP 7.3.5 or later
- Install Composer 1.8.5 or later
- Clone or copy the project to the default Apache root directory (/xampp/htdocs)
- Run 'composer install' command
- Create a .env file from the .env.example file 
- Run 'php artisan key:generate' command
- Configure an Apache virtual host in \xampp\apache\conf\extra\httpd-vhosts.conf file by adding lines:
``` 
    <VirtualHost tweety.test:80>
        DocumentRoot "C:/xampp/htdocs/tweety/public"
        <Directory "C:/xampp/htdocs/tweety/public">
            Options Indexes FollowSymLinks
            AllowOverride All
            Require all granted
        </Directory>
    </VirtualHost>
``` 
- Open a text editor as administrator and add '127.0.0.1 tweety.test' to \drivers\etc\hosts file
- In the .env file change the database name: DB_DATABASE=tweety 
- Create database named 'tweety'
- Run 'php artisan migrate'
- Add path C:\xampp\htdocs\tweety\vendor\nodejs\nodejs
- Run 'npm install'






