<?php

namespace Adwords;

$path = __DIR__ . '/src';
set_include_path(get_include_path() . PATH_SEPARATOR . $path);

require_once __DIR__.'/src/Google/Api/Ads/AdWords/Lib/AdWordsUser.php';

class Adwords extends \AdWordsUser {
}
