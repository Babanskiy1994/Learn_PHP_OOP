<?php

namespace Patterns\Decorator;

spl_autoload_register(function($class) {
    $filename = str_replace('\\', '/', $class) . '.php';
    require($filename);
});

interface OrderUpdate
{
    public function update();
}

class Update implements OrderUpdate
{
    public function update() {
        echo 'Обновление успешно' . PHP_EOL;
    }
}

class LogUpdate implements OrderUpdate
{
    protected $object;

    public function __construct(OrderUpdate $upd) {
        $this->object = $upd;
    }

    public function update() {
        echo 'Логирование обновления заказа' . PHP_EOL;
        $this->object->update();
    }
}

class ApiUpdate implements OrderUpdate
{
    protected $object;

    public function __construct(OrderUpdate $upd) {
        $this->object = $upd;
    }

    public function update() {
        echo 'Автоматическое обновление заказа' . PHP_EOL;
        $this->object->update();
    }
}

class ManualUpdate implements OrderUpdate
{
    protected $object;

    public function __construct(OrderUpdate $upd) {
        $this->object = $upd;
    }

    public function update() {
        echo 'Ручное обновление заказа' . PHP_EOL;
        $this->object->update();
    }
}

$apiUpdate = new ApiUpdate(new LogUpdate(new Update()));
$apiUpdate->update();

$manualUpdate = new ManualUpdate(new LogUpdate(new Update()));
$manualUpdate->update();