<?php

namespace Patterns\Singleton;

spl_autoload_register(function($class) {
    $filename = str_replace('\\', '/', $class) . '.php';
    require($filename);
});

require_once __DIR__ . '/payService.php';
require_once __DIR__ . '/ticketService.php';