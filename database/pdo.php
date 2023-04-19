<?php
$host = "localhost";
$username = "kls2";
$password = "password";
$database = "san_kyi_dar_par";

try{
    $conn = new PDO(
        "mysql:host=$host;dbname=$database", $username, $password
    );
}catch(ErrorException $e) {
    print_r($e);
}

// $stmt = $conn->prepare("INSERT INTO my (name,money) VALUES (:name,:money)");

// $stmt->bindParam(":name",$name);
// $stmt->bindParam(":money",$money);

// $name = "SU SU";
// $money = 1500;

// $stmt = $conn->query("SELECT * FROM my");
// $users = $stmt->fetchAll(PDO::FETCH_OBJ);



// $stmt = $conn->query("SELECT * FROM my WHERE id=2");
// $user = $stmt->fetch(PDO::FETCH_OBJ);

// $stmt = $conn->prepare("UPDATE my SET name=:name , money=:money WHERE id = :id");
// $stmt->bindParam(":name",$name);
// $stmt->bindParam(":money",$money);
// $stmt->bindParam(":id",$id);
// $id = 2;
// $name = "SU SU";
// $money = 1500;
// var_dump($stmt->execute());

$stmt = $conn->prepare("DELETE FROM my WHERE id=:id");
$stmt->bindParam(":id",$id);
$id = 3;
var_dump($stmt->execute());