<?php

require 'MotorWay.php';
require 'PedestrianWay.php';
require 'ResidentialWay.php';
require 'Car.php';
require 'Truck.php';
require 'Bicycle.php';
require 'Skateboard.php';

$car2 = new Car('red',5,'fuel');

try {
    $car2->start();
} catch (Exception $e) {
    echo $e->getMessage() . 'baisse le frein à main. <br>' . PHP_EOL;
    $car2->setParkBrake(false);
} finally {
    echo 'Ma voiture roule comme un donut <br>' . PHP_EOL;
}


