<?php

abstract class ParentClass {
    abstract function toBeDoctor();
}

class ChildClass extends ParentClass {
    public function toBeDoctor()
    {
        $first = "success matriculation exam with high marks";
        $second = "join medical University";
        $third = "graduate with MBBS";
        return "I'm a doctor";
    }
}