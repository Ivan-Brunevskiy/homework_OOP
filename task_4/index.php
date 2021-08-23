<?php
//Сделайте класс Worker, в котором будут следующие private поля - name (имя), salary (зарплата).
// Сделайте так, чтобы эти свойства заполнялись в методе __construct при создании объекта
// (вот так: new Worker(имя, возраст) ). Сделайте также public методы getName, getSalary.
//Создайте объект этого класса 'Дима', возраст 25, зарплата 1000. Выведите на экран произведение его возраста и зарплаты.

include_once "Worker.php";


$student1 = new Worker('Дима', 1000);

$student1->age = 25;

$proisvedenie = $student1->age * $student1->getSalary();

echo "произведение возраста и зарплаты " . $student1->getName() . " = " . $proisvedenie;

