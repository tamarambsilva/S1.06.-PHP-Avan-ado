<?php

require_once "Car.php";
require_once "Turbo.php";

$car = new Car(
    $brand = "Toyota",
    $plate = "FDK1982",
    $fuelType = "Gasoline",
    $maxSpeed = 220);

echo "Brand: " . $car->brand . "<br>";
echo "Plate: " . $car->plate . "<br>";
echo "Fuel type: " . $car->fuelType . "<br>";
echo "Maximum speed: " . $car->maxSpeed . " km/h<br>";

$car->boost(); // aqui usamos o trait