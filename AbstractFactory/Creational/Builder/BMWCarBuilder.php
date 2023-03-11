<?php

namespace Creational\Builder;

use Creational\Builder\Models\BMWCar;
use Creational\Builder\Models\Car;

class BMWCarBuilder implements CarBuilderInterface
{
    /**
     * @var  Car $type
     */
    private $type;

    public function createCar(){
        $this->type = new BMWCar();
    }
    public function addEngine(){
        $this->type->setPart('Engine NAME NAME','BMW Engine VALUE');
    }
    public function addDoors(){
        $this->type->setPart('Door NAME NAME','BMW Door VALUE');
    }
    public function addBody(){
        $this->type->setPart('Body NAME NAME','BMW Body VALUE');
    }
    public function addWheel(){
        $this->type->setPart('Wheel NAME NAME','BMW Wheel VALUE');
    }
    public function getCar():Car{
        return  $this->type;
    }
}