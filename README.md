Расширение для обращения к базе росреестра
==========================================
Расширение для обращения к базе росреестра

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist brazhnikov/yii2-cadastre "*"
```

or add

```
"require": {
        "brazhnikov/yii2-cadastre": "~1.0.6"
    },
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

migrate:

./yii migrate --migrationPath=@vendor/brazhnikov/yii2-cadastre/migrations --interactive=0
