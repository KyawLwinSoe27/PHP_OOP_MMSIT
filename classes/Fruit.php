<?php

class Fruit {

    public static $y = "y \n";
    public static $x = "x \n";

    public static function z() {
        return "z \n";
    }

    public $name;
    public $color;

    function __construct(String $name, String $color)
    {
        $this->name = $name;
        $this->color = $color;
        echo "\n I'm constructor \n";
    }

    public function details() {
        return $this->name;
    }

    function __destruct()
    {
        echo "\n I'm desctructor \n";
    }

}