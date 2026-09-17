<?php

require "functions.php";
// require "router.php";

$host = "localhost";
$port = 3306;
$db = "practice";
$user = "root";
$charset = 'utf8mb4';
$pass = "asif0599";

$dsn = "mysql:host=$host;port=$port;dbname=$db;charset=$charset";

$pdo = new PDO($dsn,'root',$pass);
$statement = $pdo->prepare("select * from posts");
$statement->execute();

$posts = $statement->fetchAll(PDO::FETCH_ASSOC);

die_and_dump($posts);


// die_and_dump($_SERVER);

// echo "Single Entry Point";
