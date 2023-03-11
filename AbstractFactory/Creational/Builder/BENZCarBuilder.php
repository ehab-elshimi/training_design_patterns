<?php

namespace Creational\Builder;


use Creational\Builder\Models\BENZCar;
use Creational\Builder\Models\Car;

class BENZCarBuilder implements CarBuilderInterface
{
    /**
     * @var  Car $type
     */
    private $type;
    public function createCar(){
        $this->type = new BENZCar();
    }
    public function addEngine(){
        $this->type->setPart('Engine NAME NAME','BENZ Engine VALUE');
    }
    public function addDoors(){
        $this->type->setPart('Door NAME NAME','BENZ Door VALUE');
    }
    public function addBody(){
        $this->type->setPart('Body NAME NAME','BENZ Body VALUE');
    }
    public function addWheel(){
        $this->type->setPart('Wheel NAME NAME','BENZ Wheel VALUE');
    }
    public function getCar():Car{
        return  $this->type;
    }
}