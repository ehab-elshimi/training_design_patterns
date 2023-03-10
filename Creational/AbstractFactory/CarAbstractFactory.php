<?php

namespace Creational\AbstractFactory;

class CarAbstractFactory
{
    private $price;
    private $tax = 100000;

    public function __construct($price)
    {
        $this->price = $price;
    }

    public function createBMWCar(): BMWCar
    {
        return new BMWCar($this->price);
    }

    public function createBenzCar(): BenzCar
    {
        return new BenzCar($this->price, $this->tax);
    }
}