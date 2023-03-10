<?php

namespace Tests;

use Creational\AbstractFactory\BenzCar;
use Creational\AbstractFactory\BMWCar;
use Creational\AbstractFactory\CarAbstractFactory;
use PHPUnit\Framework\TestCase;

class AbstractFactoryTest extends TestCase
{
    public function testCanCreatBMWCar(){
        $carFactory = new CarAbstractFactory(200000);
        $myCar = $carFactory->createBMWCar();
        $this->assertInstanceOf(BMWCar::class, $myCar);
    }
    public function testCanCreatBenzCar(){
        $carFactory = new CarAbstractFactory(200000);
        $myCar = $carFactory->createBenzCar();
        $this->assertInstanceOf(BenzCar::class, $myCar);
    }
}