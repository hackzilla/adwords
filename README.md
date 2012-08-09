Adwords
=======

Google Adwords Vendor for Symfony2 (v2.0)

Uses Google Adwords API version 3.1.1


Setup
=====

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
