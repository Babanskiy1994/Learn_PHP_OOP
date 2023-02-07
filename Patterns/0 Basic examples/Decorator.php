<?php

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
    public function __construct(protected OrderUpdate $upd) {
    }

    public function update() {
        echo 'Логирование обновления заказа' . PHP_EOL;
        $this->upd->update();
    }
}

$logUpdate = new LogUpdate(new Update());
$logUpdate->update();




/* 
Применимость:

    Когда вам нужно добавлять обязанности объектам на лету, незаметно для кода, который их использует.
Объекты помещают в обёртки, имеющие дополнительные поведения. Обёртки и сами объекты имеют одинаковый интерфейс, поэтому клиентам без разницы, с чем работать — с обычным объектом данных или с обёрнутым.

    Когда нельзя расширить обязанности объекта с помощью наследования.
Во многих языках программирования есть ключевое слово final, которое может заблокировать наследование класса. Расширить такие классы можно только с помощью Декоратора.
*/