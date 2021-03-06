<?php
class Product{
 
    // database connection and table name
    private $conn;
    private $table_name = "seller";
 
    // object properties
    public $id;
    public $name;
    public $email;
    public $password;
 
    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }
    // read products
    function read(){
 
    // select all query
    $query = "SELECT
                c.name as category_name, p.id, p.name, p.email, p.password
            FROM
                " . $this->table_name . " p
                LEFT JOIN
                    categories c
                        ON p.category_id = c.id
            ORDER BY
                p.created DESC";
 
    // prepare query statement
    $stmt = $this->conn->prepare($query);
 
    // execute query
    $stmt->execute();
 
    return $stmt;
}