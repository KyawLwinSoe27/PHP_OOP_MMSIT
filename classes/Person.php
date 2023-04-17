<?php

class Person
{
    // Properties
    public $skinColor;
    public $apperance;

    protected $money;
    protected $gfName;

    private $fbPassword;


    // Methods
    public function walk() {
        return "can walk";
    }
    public function talk() {
        return "can talk";
    }

    protected function canTeach() {
        return "can teach";
    }

    protected function learn() {
        return "can learn";
    }

    private function saveMoney() {
        return "save money";
    }

    // Encapsulation

    public function get() {
        return $this->fbPassword;
    }

    public function set(String $text) {
        return $this->fbPassword = $text;
    }
}