<?php
 
 // Пример: два источник предоставляют данные в разных форматах. Функции, использующие эти данные, должны получать на входе единый формат

$hotelDataOstrovok = [
    'hotel' => 'Test Ostrovok',
    'id' => '1',
];

$hotelDataOktogo = '{"hotel":"Test Oktogo","id":"2"}';

interface IShowHotelData{
    public function show():array;
}

class ShowHotelDataFromOstrovok implements IShowHotelData{
    private $hotelData;

    public function __construct($hotelData)
    {
        $this->hotelData = $hotelData;
    }
    
    public function show():array{
        return $this->hotelData;
    }
}

class ShowHotelDataFromOktogo implements IShowHotelData{
    private $hotelData;

    public function __construct($hotelData)
    {
        $this->hotelData = $hotelData;
    }
    
    public function show():array{
        return json_decode($this->hotelData, true);
    }
}

$showOstrovokHotel = new ShowHotelDataFromOstrovok($hotelDataOstrovok);
var_dump($showOstrovokHotel->show());

$showOktogoHotel = new ShowHotelDataFromOktogo($hotelDataOktogo);
var_dump($showOktogoHotel->show());
