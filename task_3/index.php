<?php
//Дополните класс Worker из предыдущей задачи private методом checkAge, который будет проверять
// возраст на корректность (от 1 до 100 лет). Этот метод должен использовать метод setAge перед
// установкой нового возраста (если возраст не корректный - он не должен меняться).

include_once "Worker.php";


$student1 = new Worker();
$student2 = new Worker();

$student1->setName('Иван');
$student2->setName('Вася');

$student1->setAge(25);
$student2->setAge(104);

$student1->setSalary(1000);
$student2->setSalary(2000);

$sum_age = $student1->getAge() + $student2->getAge();
$sum_salary = $student1->getSalary() + $student2->getSalary();

echo "сумма возрастов " . $student1->getName() . " и " . $student2->getName() . " равна " . $sum_age;
echo "<br>";
echo "сумма зарплат " . $student1->getName() . " и " . $student2->getName() . " равна " . $sum_salary;


