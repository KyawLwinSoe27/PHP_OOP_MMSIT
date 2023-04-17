<?php

class Three
{
    public static $a = "a";
    public static $b = "b \n";

    public static function c() {
        return "c \n";
    }

    public static function d() {
        return self::$a . self::c();
    }
}