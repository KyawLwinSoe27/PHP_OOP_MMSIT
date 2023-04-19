<?php 

$db = "dbs.sqlite";
$tableName = "users";

try{
    $conn = new SQLite3($db);
}catch(Exception $e) {
    print_r($e);
}

// $sql = "CREATE TABLE $tableName (
//     id INTEGER PRIMARY KEY,
//     name VARCHAR(30),
//     money FLOAT
// )";

// var_dump($conn->exec($sql));

$sql = "INSERT INTO $tableName (name,money) VALUES (:name,:money)";
$stmt = $conn->prepare($sql);
$stmt->bindParam(":name",$name);
$stmt->bindParam(":money",$money);

$name = "Kyaw Kyaw";
$money = 500;
$stmt->execute();

$name = "Mg Mg";
$money = 1500;
$stmt->execute();

$name = "Zaw Zaw";
$money = 200;
$stmt->execute();