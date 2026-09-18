<?php

class Database{

public $connection;

public function __construct(){
    $host = "localhost";
    $port = 3306;
    $db = "practice";
    $user = "root";
    $charset = 'utf8mb4';
    $pass = "asif0599";

    $dsn = "mysql:host=$host;port=$port;dbname=$db;charset=$charset";

    $this->connection = new PDO($dsn, 'root', $pass);
}

  public function query($query){
   
    $statement = $this->connection->prepare($query);
    $statement->execute();
    return $statement;
  }
}