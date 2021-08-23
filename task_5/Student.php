<?php


class Student extends User
{
private $stependiya;
private $cours;

public function setStepend($step){
    $this->stependiya = $step;
}
public function getStepend(){
    return $this->stependiya;
}
public function setCours($cours){
    $this->cours = $cours;
}
public function getCours(){
    return $this->cours;
}
}
