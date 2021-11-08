<?php

require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';
require_once 'Car.php';
require_once 'Truck.php';
require_once 'Skateboard.php';
require_once 'Bicycle.php';

$motor = new MotorWay(4, 130);
$pedestrian = new PedestrianWay(1, 10);
$residential = new ResidentialWay(2, 50);

$voiture = new Car("blue", 5, "fuel");
$vélo = new Bicycle("blue", 1);

echo $motor->addVehicle($voiture);

try {
    $voiture->start();
} catch(Exception $e){
    // code to manage exceptions
    $voiture->setParkBrake(false);    
} finally {
    echo "Ma voiture roule comme un donut" . PHP_EOL;
}