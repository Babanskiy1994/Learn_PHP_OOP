<?php

namespace Patterns\Factory;

spl_autoload_register(function($class) {
    $filename = str_replace('\\', '/', $class) . '.php';
    require($filename);
});

require_once __DIR__ . '/cash.php';
require_once __DIR__ . '/bankcard.php';