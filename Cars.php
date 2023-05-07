<?php

class Car
{

    public $mark;
    public $model;
    public $year;
    public $engineType;
    public $fuelType;
    public $fuelCapacity;
    public $consumption;
    public $actualFuel;

    public function drive(float $distance)
    {

        $this->actualFuel -= $distance * $this->consumption / 100;

        return $this;
    }

    public function chargeToTop(float $fuel)
    {

        $this->actualFuel += $fuel;

        return $this;
    }


}

$car1 = new Car();

$car1->chargeToTop(65);

$car1->consumption = 12;

echo $car1->actualFuel . PHP_EOL;

$car1->drive(150);

echo $car1->actualFuel . PHP_EOL;
