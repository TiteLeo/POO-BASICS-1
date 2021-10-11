<?php

require_once 'cars.php';

$Cars = new Cars('red', 5, 'electric');
var_dump($Cars);
$Cars->dump();
$Cars->setCurrentSpeed(185);
var_dump($Cars->getCurrentSpeed());

$musselCar = new Cars('black', 2, 'fuel');
$musselCar->start();
$musselCar->forward();

$formule1 = new Cars('blue', 1, 'gazoil');
$formule1-> start();
$formule1->forward();

echo $Cars->forward();
echo '<br> Vitesse de la C2 : ' . $Cars->getCurrentSpeed() . ' km/h' . '<br>';
echo $Cars->brake();
echo '<br> Vitesse de la C2 : ' . $Cars->getCurrentSpeed() . ' km/h' . '<br>';
echo $Cars->brake();

echo $musselCar->forward();
echo '<br> Vitesse de la Mustang : ' . $musselCar->getCurrentSpeed() . ' km/h' . '<br>';
echo $musselCar->brake();
echo '<br> Vitesse de la Mustang : ' . $musselCar->getCurrentSpeed() . ' km/h' . '<br>';
echo $musselCar->brake();

echo $formule1->forward();
echo '<br> Vitesse de la Ferrari : ' . $formule1->getCurrentSpeed() . ' km/h' . '<br>';
echo $formule1->brake();
echo '<br> Vitesse de la Ferrari : ' . $formule1->getCurrentSpeed() . ' km/h' . '<br>';
echo $formule1->brake();