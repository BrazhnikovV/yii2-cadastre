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
"brazhnikov/yii2-cadastre": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
<?= \brazhnikov\cadastre\AutoloadExample::widget(); ?>```