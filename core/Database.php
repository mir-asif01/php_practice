<?php

class Database
{
  public $connection;
  public $statement;

  public function __construct($config)
  {
    $dsn = 'mysql:' . http_build_query($config, '', ';');

    // pdo = php database object
    // best way to load credentials from envs
    $this->connection = new PDO($dsn, $config['user'], $config['password'], [
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);
  }

  public function query($query, $params = [])
  {
    $this->statement = $this->connection->prepare($query);
    $this->statement->execute($params);

    return $this;
  }

  public function findAll()
  {
    return $this->statement->fetchAll();
  }

  public function findSingle()
  {
    return $this->statement->fetch();
  }

  public function findOrFail()
  {
    $result = $this->findSingle();
    if (!$result) {
      abort(404, "Not Found");
    } else {
      return $result;
    }
  }
}
