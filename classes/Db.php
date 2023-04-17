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

    public function create(array $data) {
        $sql = "INSERT INTO $this->tableName ";
        $sql .= "(".join(",",array_keys($data)).") VALUES ";
        $sql .= "('".join("','",array_values($data))."')";

        mysqli_query($this->conn,$sql);

        return $this->conn->insert_id;
    }

    public function index():array {
        $sql = "SELECT * FROM $this->tableName";
        $query = mysqli_query($this->conn, $sql);
        $data = [];
        while($rows = mysqli_fetch_object($query)) {
            $data[] = $rows;
        }

        return $data;
    }

    public function show(int $id):object{
        $sql = "SELECT * FROM $this->tableName WHERE id=$id";
        $query = mysqli_query($this->conn,$sql);
        $row = mysqli_fetch_object($query);
        return $row;
    }

    function __destruct()
    {
        mysqli_close($this->conn);
    }
}