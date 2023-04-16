<?php

class Student {
    public $name,$gender,$birthYear,$namePrefix,$age;

    function __construct(String $name, String $gender, String $birthYear)
    {
        $this->name = $name;
        $this->gender = $gender;
        $this->birthYear = $birthYear;

        $this->namePrefix = $gender == "male" ? "Mr." : "Ms.";
        $this->age = date("Y") - $birthYear;
    }

    public function showFullName() {
        return $this->namePrefix.$this->name . "\n";
    }

   public function introduction() {
    $result = "My name is $this->namePrefix $this->name and $this->age year" . ($this->age > 1 ? "s" : ""). " old \n";
    return $result;
   }
}