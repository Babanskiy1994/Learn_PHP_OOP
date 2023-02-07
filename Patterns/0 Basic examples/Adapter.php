<?php

interface Book
{
    public function turnPage();

    public function open();

    public function getPage(): int;
}

interface EBook
{
    public function unlock();

    public function pressNext();

    public function getPage(): array;
}

class EBookAdapter implements Book
{
    public function __construct(protected EBook $eBook) {
    }

    public function open() {
        $this->eBook->unlock();
    }

    public function turnPage() {
        $this->eBook->pressNext();
    }

    public function getPage(): int {
        return $this->eBook->getPage()[0];
    }
}

class Kindle implements EBook
{
    private int $page = 1;
    private int $totalPages = 100;

    public function pressNext() {
        $this->page++;
    }

    public function unlock() {
    }

    public function getPage(): array {
        return [$this->page, $this->totalPages];
    }
}



/* 
Применимость:

    Когда вы хотите использовать сторонний класс, но его интерфейс не соответствует остальному коду приложения.
Адаптер позволяет создать объект-прокладку, который будет превращать вызовы приложения в формат, понятный стороннему классу.

    Когда вам нужно использовать несколько существующих подклассов, но в них не хватает какой-то общей функциональности, причём расширить суперкласс вы не можете.
Вы могли бы создать ещё один уровень подклассов и добавить в них недостающую функциональность. Но при этом придётся дублировать один и тот же код в обеих ветках подклассов.
Более элегантным решением было бы поместить недостающую функциональность в адаптер и приспособить его для работы с суперклассом. Такой адаптер сможет работать со всеми подклассами иерархии. Это решение будет сильно напоминать паттерн Декоратор.
*/