<?php
// Сделайте класс User, в котором будут следующие protected поля - name (имя), age (возраст), public методы setName,
// getName, setAge, getAge.
//Сделайте класс Worker, который наследует от класса User и вносит дополнительное private поле salary (зарплата),
// а также методы public getSalary и setSalary.
//Создайте объект этого класса 'Иван', возраст 25, зарплата 1000. Создайте второй объект этого класса 'Вася',
// возраст 26, зарплата 2000. Найдите сумму зарплата Ивана и Васи.
//Сделайте класс Student, который наследует от класса User и вносит дополнительные private поля стипендия, курс,
// а также геттеры и сеттеры для них.

include_once "User.php";
include_once "Student.php";
include_once "Worker.php";


$student1 = new Worker();
$student2 = new Worker();

$student1->setName('Иван');
$student2->setName('Вася');

$student1->setAge(25);
$student2->setAge(26);

$student1->setSalary(1000);
$student2->setSalary(2000);

$summa = $student1->getSalary() + $student2->getSalary();

echo "сумма зарплат " . $student1->getName() . " и " . $student2->getName() .  " равна $summa";

