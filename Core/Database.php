<?php

namespace Core;
use PDO;
class Database{

public $connection;
public $statement;

public function __construct($config,$username,$password){
    $dsn = 'mysql:' . http_build_query($config,'',";");

    $this->connection = new PDO($dsn, $username, $password,[
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);
}

  public function query($query,$params=[]){
    $this->statement = $this->connection->prepare($query);
    $this->statement->execute($params);
    return $this;
  }

  public function list(){
    return $this->statement->fetchAll();
  }

  public function listOrFail(){
    $result = $this->list();

    if(!$result){
      $this->abort();
    }

    return $result;
  }

  public function find(){
    return $this->statement->fetch();
  }

  public function findOrFail(){
    $result = $this->find();

    if(!$result){
      $this->abort();
    }

    return $result;
  }

  public static function abort($status=404){
  require base_path("controllers/{$$status}.php");
  die();
  }
}