<?php


system("clear");
$host = "localhost";
$username = "kls2";
$password = "password";
$database = "School4";

$conn = new PDO(
    "mysql:host=$host;dbname=$database",
    $username,
    $password
);

print_r($conn);