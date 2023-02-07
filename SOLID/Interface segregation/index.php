<?php

// Пример: интерфейс, реализующий получение информации о заказе, лучше разбивать на части, чтобы классы получения информации об авиа заказах и о ЖД заказах не зависили от него

$flightData = [
    'depature' => 'Рязань',
    'arrival' => 'Москва',
    'class' => 'A',
];

$trainData = [
    'depature' => 'Симферополь',
    'arrival' => 'СПБ',
    'number' => '257',
];

interface IShowDirectionsData
{
    public function showDepatureData();
    public function showArrivalData();
}

interface IShowCarriageNumber
{
    public function showCarriageNumber();
}

interface IShowFlightClass
{
    public function showFlightClass();
}

class ShowFlightData implements IShowDirectionsData, IShowFlightClass
{
    private $orderData;
    public function __construct($orderData) {
        $this->orderData = $orderData;
    }
    public function showDepatureData() {
        echo 'Вылет из: ' . $this->orderData['depature'] . PHP_EOL;
    }
    public function showArrivalData() {
        echo 'Прилет в: ' . $this->orderData['arrival'] . PHP_EOL;
    }
    public function showFlightClass() {
        echo 'Класс перелета: ' . $this->orderData['class'] . PHP_EOL;
    }
}

class ShowTrainTripData implements IShowDirectionsData, IShowCarriageNumber
{
    private $orderData;
    public function __construct($orderData) {
        $this->orderData = $orderData;
    }
    public function showDepatureData() {
        echo 'Выезд из: ' . $this->orderData['depature'] . PHP_EOL;
    }
    public function showArrivalData() {
        echo 'Прибытие в: ' . $this->orderData['arrival'] . PHP_EOL;
    }
    public function showCarriageNumber() {
        echo 'Номер вагона: ' . $this->orderData['number'] . PHP_EOL;
    }
}

$showFlight = new ShowFlightData($flightData);
$showFlight->showDepatureData();
$showFlight->showArrivalData();
$showFlight->showFlightClass();

$showTrainTrip = new ShowTrainTripData($trainData);
$showTrainTrip->showDepatureData();
$showTrainTrip->showArrivalData();
$showTrainTrip->showCarriageNumber();
