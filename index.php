<?php

require_once "./autoload.php";

// var_dump(Three::d());

// $one = new One;
// print_r($one->a()->b()->c()->d());

$user = new QueryBuilder("users");
// print_r($user->where("gender","=","male")->where("age",">","18")->sql());
echo $user->where("gender","=","male")->where("age",">","18")->orderBy("id")->orderBy("name","DESC")->sql();


$lists = new QueryBuilder("users");
echo $lists->where("id","=",4)->orWhere("id", "=", 5)->orWhere("id", "=", 9)->sql();