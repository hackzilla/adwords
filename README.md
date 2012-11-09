Adwords
=======

Google Adwords Vendor for Symfony2 (v2.0/v2.1)

Uses Google Adwords API version 3.2.1


Symfony 2.1 Setup
=================

add something similar to your composer.json file.

    "autoload": {
        "psr-0": { "": "src/" }
    },
    "repositories": [
        {
            "type":"vcs",
            "url":"https://github.com/hackzilla/adwords.git"
        }
    ],
    "require": {
        "php": ">=5.3.3",
        "symfony/symfony": "2.1.*",
        "doctrine/orm": ">=2.2.3,<2.4-dev",
        "doctrine/doctrine-bundle": "1.0.*",
        "twig/extensions": "1.0.*",
		"hackzilla/adwords": "dev-master"
		...
    },


Symfony 2.0 Setup
=================

Setup
-----

In root of symfony2 project:

git clone git://github.com/hackzilla/Adwords.git vendor/adwords


Add to deps
-----------

[Adwords]
    git=git://github.com/hackzilla/Adwords.git


Add to the autoload.php
-----------------------

$loader->registerNamespaces(array(
...
    'Adwords'          => __DIR__.'/../vendor/adwords/lib',
...
));
