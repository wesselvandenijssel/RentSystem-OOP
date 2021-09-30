<?php
class Category{
    private $conn;
    private $table_name = "category";
    // object properties
    public $id;
    // constructor with $db as database connection
    public function __construct($db){
    $this->conn = $db;
}
// read products
function read()
{
    // select all query
    $query = "SELECT * FROM " . $this->table_name;
    $result = $this->conn->query($query);
    return $result;
    echo $result;
}
function create(){
     // select all query
    $query = "SELECT * FROM " . $this->table_name;
    $result = $this->conn->query($query);
    return $result;
    echo $result;
}
function update(){
     // select all query
    $query = "UPDATE * FROM " . $this->table_name;
    $result = $this->conn->query($query);
    return $result;
    echo $result;
}
function delete(){
     // select all query
    $query = "DELETE * FROM " . $this->table_name;
    $result = $this->conn->query($query);
    return $result;
    echo $result;
}
}