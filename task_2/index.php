<?php
//Сделайте класс Worker, в котором будут следующие private поля - name (имя), age (возраст), salary (зарплата)
// и следующие public методы setName, getName, setAge, getAge, setSalary, getSalary.
//Создайте 2 объекта этого класса: 'Иван', возраст 25, зарплата 1000 и 'Вася', возраст 26, зарплата 2000.
//Выведите на экран сумму зарплат Ивана и Васи. Выведите на экран сумму возрастов Ивана и Васи.

include_once "Worker.php";


$student1 = new Worker();
$student2 = new Worker();

$student1->setName('Иван');
$student2->setName('Вася');

$student1->setAge(25);
$student2->setAge(26);

$student1->setSalary(1000);
$student2->setSalary(2000);

$sum_age = $student1->getAge() + $student2->getAge();
$sum_salary = $student1->getSalary() + $student2->getSalary();

echo "сумма возрастов " . $student1->getName() . " и " . $student2->getName() . " равна " . $sum_age;
echo "<br>";
echo "сумма зарплат " . $student1->getName() . " и " . $student2->getName() . " равна " . $sum_salary;

