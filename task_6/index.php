<?php
// Сделайте класс Driver (Водитель), который будет наследоваться от класса Worker из предыдущей задачи.
// Этот метод должен вносить следующие private поля: водительский стаж, категория вождения (A, B, C).

include_once "User.php";
include_once "Worker.php";
include_once "Driver.php";


$driver = new Driver();
$driver->setDriveExp(10);
$driver->setCat('A');
$driver->setCat('D');
$driver->setCat('B');
$driver->setCat('B');
$driver->setCat('C');
var_dump($driver->getCat());

echo $driver->getDriveExp();

