<?php

namespace Creational\Builder;

use Creational\Builder\Models\Car;

interface CarBuilderInterface
{
    public function createCar();
    public function addEngine();
    public function addDoors();
    public function addBody();
    public function addWheel();
    public function getCar():Car;

}