<?php

class Worker
{
    private $name;
    private $salary;
    public $age;

    public function getName()
    {
        return $this->name;
    }

    public function getSalary()
    {
        return $this->salary;
    }

    public function __construct($name, $salary)
    {
        $this->name = $name;
        $this->salary = $salary;
    }

}
