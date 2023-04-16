<?php

class Db
{
    public $conn, $tableName;

    function __construct(String $tableName)
    {
        $hostName = "localhost";
        $userName = "kls2";
        $password = "password";
        $database = "san_kyi_dar_par";

        $this->conn = mysqli_connect($hostName,$userName,$password,$database);
        $this->tableName = $tableName;
    }
}