<?php

// Пример: Метод, который получает номер заказа не должен делать запрос в базу за информацией о заказе

class OrderId {
    private $billingNumber;
    // Getter and setter
}

class OrderInfo {
    public function info(OrderId $orderId) {
        // Get order info from database
    }
}