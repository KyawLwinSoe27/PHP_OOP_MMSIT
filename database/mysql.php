<?php

$host = "localhost";
$username = "kls2";
$password = "password";
$database = "School4";

$conn = new mysqli($host,$username,$password,$database);

// $sql = "INSERT INTO `School4`.`students` (`name`, `date_of_birth`, `birth_year`, `gender`, `weight`, `money`, `is_active`, `nation`, `address`) VALUES ('kyaw lwin soe', '2002-01-01', '2002', 'male', 160, 3232, 1, 'mm', 'none'); ";
// $sql = "SELECT * FROM students WHERE id = 3123";
// $result = $conn->query($sql);
// print_r($result->fetch_object());

$sql = "INSERT INTO `students` (`name`, `date_of_birth`, `birth_year`, `gender`, `weight`, `money`, `is_active`, `nation`, `address`) VALUES (?,?,?,?,?,?,?,?,?)";
$stmt = $conn->prepare($sql);

//bind param က injection ကို ကာကွယ်ပေးထားတယ်
$stmt->bind_param("ssssiiiss",$name,$dateOfBirth,$birthYear,$gender,$weight,$money,$isActive,$nation,$address);

$name = "Kyaw Kyaw";
$dateOfBirth = "2000-01-01";
$birthYear = "2000";
$gender = "male";
$weight = 150;
$money = 3000;
$isActive = 1;
$nation ="mm";
$address = "ygn";

$stmt->execute();
print_r($conn);
