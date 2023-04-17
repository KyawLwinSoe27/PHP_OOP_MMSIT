<?php

$host = "localhost";
$username = "kls2";
$password = "password";
$database = "School4";

$conn = new mysqli($host,$username,$password,$database);

// $sql = "INSERT INTO `School4`.`students` (`name`, `date_of_birth`, `birth_year`, `gender`, `weight`, `money`, `is_active`, `nation`, `address`) VALUES ('kyaw lwin soe', '2002-01-01', '2002', 'male', 160, 3232, 1, 'mm', 'none'); ";
$sql = "SELECT * FROM students WHERE id = 3123";
$result = $conn->query($sql);
print_r($result->fetch_object());