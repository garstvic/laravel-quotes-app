Laravel 5 Quotes Application

// Install framework
$ rm README.md php.ini hello-world.php
$ sudo composer self-update
$ composer create-project laravel/laravel ./laravel --prefer-dist
$ shopt -s dotglob
$ mv laravel/* ./
$ rm -rf laravel

// Apache2
$ sudo vim /etc/apache2/sites-enabled/001-cloud9.conf
    // Change this line
    DocumentRoot /home/ubuntu/workspace

    // To following
    DocumentRoot /home/ubuntu/workspace/public
    
$ sudo composer update

// DB
$ c9 .env
    // Change this lines
    DB_DATABASE=homestead
    DB_USERNAME=homestead
    DB_PASSWORD=secret

    // To following
    DB_DATABASE=c9
    DB_USERNAME=your-username-in-cloud9
    DB_PASSWORD=

$ mysql-ctl install
$ phpmyadmin-ctl install
$ mysql-ctl start
Open url from output of phpmyadmin-ctl install : your-username-in-cloud9 and blink password