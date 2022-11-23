<?php

namespace Patterns\Singleton;

$message = 'Выписка заказа';

$logger = Logger::getInstance();

var_dump($logger);
$logger->log($message);