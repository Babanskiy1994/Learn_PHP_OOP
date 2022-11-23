<?php

/* Класс имеет СВОЙСТВА и МЕТОДЫ */

class Shop{
    private $category;                          //свойство класса

    public function AppleCategory(){            //метод класса
        $this -> category = "Apple";
        echo "Категория {$this -> category}"."<br>";
    }
}



/* ОБЪЕКТ - экземпляр класса */

$product = new Shop;                            //объект
$product->AppleCategory();                      //вызов метода



/* Область видимости */

// МОДИФИКАТОРЫ ДОСТУПА (уровни инкапсуляции)
// Public - все свойства и методы объекта могут быть использованы в любой области скрипта
// Private - только внутри методов этого же класса
// Protected - только внутри самого класса или внутри дочернего класса



/* Конструкторы и деструкторы */

// Классы, в котором объявлен метод конструктор, вызывает метод при каждом создании нового объекта
// Деструктор будет вызван при освобождении всех ссылок на определённый объект или при завершении скрипта

class User{
    public $name;
    public $surname;

    function __construct($name, $surname)
    {
        $this -> name = $name;
        $this -> surname = $surname;
    }

    function getInfo(){
        $information = "{$this -> name} "."{$this -> surname}"."<br>";
        return $information;
    }

    function __destruct()
    {
        print "Уничтожается объект " . __CLASS__  . "<br>";
    }
}

$user1 = new User("Alex", "Aleksandrovich");
echo $user1->getInfo();



/* Наследование */

// Дочерний класс расширяет родительский, так как в нём можно добавить функциональность

class Moderator extends User{                                   //наследование
    protected $rights;

    public function __construct($name, $surname, $rights)
    {
        parent::__construct($name, $surname);                   //получение свойств от родителя
        $this -> rights = $rights;
    }

    function getInfo()
    {
        $information = parent::getInfo();
        $information .= "{$this -> rights}"."<br>";
        return $information;
    }
}

$moderator1 = new Moderator("Big", "Boss", "Модератор");
echo $moderator1->getInfo();



/* Полиморфизм */

// Язык PHP поддерживает полиморфизм в том смысле, что позволяет использовать вместо экземпляров родительского класса экземпляры подкласса

abstract class Publication {
    // определяем правило, что все публикации должны печататься, т.е. иметь метод do_print()
    abstract public function do_print();
}
   
class News extends Publication {
    // переопределяем абстрактный метод печати
    public function do_print() {
        echo '<h4>Новость</h4>';
        //...
    }
}

class Announcement extends Publication {
    // переопределяем абстрактный метод печати
    public function do_print() {
        echo '<h4>Объявление</h4>';
        //...
    }
}

class Article extends Publication {
    // переопределяем абстрактный метод печати
    public function do_print() {
        echo '<h4>Статья</h4>';
        //...
    }
}
   
//Наполняем массив публикаций объектами, производными от Publication
$publications[] = new News();
$publications[] = new Announcement();
$publications[] = new Article();

foreach ($publications as $publication) {
    if ($publication instanceof Publication) { // Если мы работаем с наследниками Publication
        $publication->do_print(); // то мы можем смело выводить данные на печать
    } else {
        //исключение или обработка ошибки
    }
}



/* Статические свойства и методы */

// Статические свойства класса это свойства к которм можно обратиться без создания объекта в контексте самого класса
// Статические методы не могут содержать $this. Статический метод может использовать лишь те свойства класса, которые являются статическими. Статичский метод может использовать константы класса

class stat{
    public static $stat_name;

    public static function hello(){
        echo "Hello ".self::$stat_name."<br>";
    }
}

stat::$stat_name="StatAlex";
stat::hello();




/* Константы класса */

// Константы класса это постоянные свойства класса. Внутри класса можно определять константы, которые будут принадлежать только самому классу
// Константы могут содержать значения исключительно элементарного типа. Им нельзя присвоить объект. Их значения нельзя переопределить

class constant{
    const SOME_CONST = 314;
}

echo constant::SOME_CONST."<br>";



/* Абстрактный класс */

// Абстрактный класс - класс, для которого не богут быть созданы его экземпляры
// Могут содержать свойства и методы. Абстрактные методы не могут иметь тела и обязательно должны быть реализваны в дочернем классе
// Дают возможность более кчественно моделировать те или иные сущности. Являются "заготовками". Иными словами они нужны для достижения полиморфизма на практике.



/* Интерфейсы */

// Интерфейсы - шаблоны, структуры которые описывают какие константы а также методы должен содержать класс, который будет реализовывать этот интерфейс
// Для интерфейса также, как и для абстрактного класса, не могут быть созданы его экземпляры
// Интерфейс не должен содержать реализацию указанных методов
// Класс может реализовывать несколько интерфейсов (перечисляются через запятую)
// Интерфейсы поддерживают наследования (в том числе множественные)

interface FirstInterface{
    public function getName();
}

interface SecondInterface{
    public function getStatus();
}

class TestInterface implements FirstInterface, SecondInterface{
    public $name = "Alexey";
    public $status = "Admin";
    
    public function getName(){
        echo $this -> name ."<br>";
    }
    public function getStatus(){
        echo $this -> status ."<br>";
    }
}

$adminUser = new TestInterface;
$adminUser -> getStatus();
$adminUser -> getName();



/* Абстрактный класс и интерфейс */

// Там и там нельзя создать экземпляры
// В интерфейсе необходимо опускать тело всех методов, а абстрактный класс может содержать реализацию отдельных методов
// Для абстрактных классаов невозможно множественное наследование, в отличии от интерфейсов



/* Трейты */

// Трейт это метод для повторного использования кода. Иными словами это интерфейсы с реализацией методов.