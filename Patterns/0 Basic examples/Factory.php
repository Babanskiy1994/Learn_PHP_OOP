<?php

class carFactory
{
    public static function build ($type = '') {
        if($type == '') {
            throw new Exception('Invalid Car Type.');
        } else {
            $className = 'car_'.ucfirst($type);

            // проверка существования класса
            if(class_exists($className)) {
                return new $className();
            } else {
                throw new Exception('Car type not found.');
            }
        }
    }
}

class car_Sedan 
{
    public function __construct() {
        echo "Creating Sedan" . PHP_EOL;
    }
}

class car_Suv 
{
    public function __construct() {
        echo "Creating SUV" . PHP_EOL;
    }
}

// Создаём новый Sedan
$sedan = carFactory::build('sedan');

// Создаём новый SUV
$suv = carFactory::build('suv');



/* 
Применимость:

    Есть главный класс который реализовывает механники работы с каким-то классом с помощбю объекта (но сам объект не пораждает, а заставлет это делать дочерние классы). 
Механника у всех дочерних классов будет одинаковая, но разные объекты.
*/