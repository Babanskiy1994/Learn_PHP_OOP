<?php

namespace Patterns\Singleton;

$message = 'Оплата заказа';

$logger = Logger::getInstance();
$logger
    ->setDateFormat('Y-m-d H:i:s')
    ->setLogType('file')
    ->setPrefix('Действие:')
;
var_dump($logger);
$logger->log($message);