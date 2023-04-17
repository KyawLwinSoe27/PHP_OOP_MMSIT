<?php

require_once "./autoload.php";

// $kyawkyaw = new Student("Kyaw Kyaw","male","2002");
// print_r($kyawkyaw->introduction());

// $my = new Db("my");
// print_r($my->create(["name"=>"KK", "money"=>1500]));

// print_r($my->show(3));

$textFile = new FileWriter("test.txt");
$textFile->write("a \n");
$textFile->write("b \n");
$textFile->write("c \n");
$textFile->write("d \n");
$textFile->write("e \n");

$textHtml = new FileWriter("home.html");
$textHtml->write("<h1>Min Ga Lar Par</h1>");

$textCss = new FileWriter("style.css");
$textCss->write("body{color:red}");