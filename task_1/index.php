<?php
//Сделайте класс Worker, в котором будут следующие public поля - name (имя), age (возраст), salary (зарплата).
//Создайте объект этого класса, затем установите поля в следующие значения (не в __construct, а для созданного объекта)
// - имя 'Иван', возраст 25, зарплата 1000. Создайте второй объект этого класса, установите поля в следующие значения
// - имя 'Вася', возраст 26, зарплата 2000.
//Выведите на экран сумму зарплат Ивана и Васи. Выведите на экран сумму возрастов Ивана и Васи.


include_once "Student.php";

$student1 = new Worker();
$student2 = new Worker();

$student1->name = 'Иван';
$student1->age = 25;
$student1->salary = 1000;

$student2->name = 'Вася';
$student2->age = 26;
$student2->salary = 2000;

$summa = $student1->salary + $student2->salary;

echo "сумма зарплат $student1->name и $student2->name равна $summa";


