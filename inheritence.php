<?php


class A {
    public $a = "a";
    protected $x = "x";
    private $y = "y";
}

class B extends A{
    public $b = "b";
    public function b() {
        return "this is b class with " . $this->x;
    }
}

class C extends B {

}

class Animal {
    public $name;
    public $gender;
    public $lifeSpan = 100;

    function __construct($name,$gender)
    {
        $this->name = $name;
        $this->gender = $gender;
    }

    public function walk(){
        return __CLASS__. " can walk with 4 legs";
    }
}

class Birds extends Animal {
    public $lifeSpan = 5;
    public $canFly;
    function __construct($name,$gender,$canFly)
    {
        parent::__construct($name,$gender);
        $this->canFly = $canFly;
    }

    public function walk(){
        print(parent::walk());
        return __CLASS__. " can walk with 2 legs";
    }

    public function fly() {
        return __CLASS__." can fly";
    }
}

class Mammal extends Animal {
    public function feeding() {
        return __CLASS__ . " feed milk";
    }
}

$bird = new Birds("bird","male",'can');
print_r($bird->walk());
// $m = new Mammal;
// print_r($m->feeding());