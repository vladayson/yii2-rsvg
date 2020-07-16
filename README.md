Yii2 rsvg wrapper
=====================
Yii2 rsvg wrapper

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist vladayson/yii2-rsvg "*"
```

or add

```
"vladayson/yii2-rsvg": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, add it in your config file:

```
/config/web.php
```

Add rsvg component
```
'components' => [
        ...
        'rsvg' => [
            'class' => vladayson\rsvg\Rsvg::class,
        ],
        ...
]
```

And use it

```php
<?php Yii::$app->rsvg->format('<path_to_svg>/.svg', '<path_to_png>/.png', 'png') ?>```