<?php


class QueryBuilder
{
    public $tableName,$where,$orWhere,$orderBy;

    function __construct($tableName)
    {
        $this->tableName = $tableName;
        $this->where = [];
        $this->orWhere = [];
        $this->orderBy = [];
    }

    public function where($columnName, $seperator, $values) {
        $this->where [] = "$columnName $seperator '$values'";
        return $this;
    }

    public function orWhere($columnName, $seperator, $values) {
        $this->orWhere [] = "$columnName $seperator '$values'";
        return $this;
    }

    public function orderBy($columnName, $sort = "ASC") {
        $this->orderBy [] = "$columnName $sort";
        return $this;
    }


    public function sql() {
        $sql = "SELECT * FROM $this->tableName";
        if(!empty($this->where)){
            $sql .= " WHERE ". join(" AND ", $this->where) ;
        }

        if(!empty($this->orWhere)){
            $sql .= " OR ". join(" OR ", $this->orWhere) ;
        }

        if(!empty($this->orderBy)){
            $sql .= " ORDER BY ". join(", ", $this->orderBy) ;
        }

        $sql .= ";";
        return $sql;
    }
}