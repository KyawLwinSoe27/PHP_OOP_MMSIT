<?php


interface A {
    public function a();
}

interface B {
    public function b();
}

interface C {
    public function c();
}

class D implements A,B,C {
    
}