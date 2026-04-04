<?php

class Database
{
  public $connection;
  public function __construct($config)
  {
    $dsn = 'mysql:' . http_build_query($config, '', ';');

    // $dsn = "mysql:host={$config['host']};dbname={$config['dbname']};charset={$config['charset']}";

    // pdo = php database object
    // best way to load credentials from envs
    $this->connection = new PDO($dsn, $config['user'], $config['password'], [
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);
  }

  public function query($query, $params = [])
  {
    $query = $this->connection->prepare($query);
    $query->execute($params);

    $posts = $query->fetchAll(PDO::FETCH_ASSOC);
    return $posts;
  }
}
