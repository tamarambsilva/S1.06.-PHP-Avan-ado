<?php



class Car{

public string $brand;
public string $plate;
public string $fuelType;
public int $maxSpeed;

use Turbo;

public function __construct(
    string $brand,
    string $plate,
    string $fuelType,
    int $maxSpeed
) {
    
$this->brand = $brand;
$this->plate = $plate;
$this->fuelType = $fuelType;
$this->maxSpeed = $maxSpeed;
}
}