<?php 

  $books = [
    [
      'name' => 'The C Programming Language',
      'language' => 'c',
      'author' => 'Brian K and Denis R',
      'ISBN' => 13456
    ],
    [
      'name' => 'Learning SQL',
      'language' => 'sql',
      'author' => 'Allen Bieulieu',
      'ISBN' => 34566
    ],
    [
      'name' => 'Learning GO and Idiomatic Approach',
      'language' => 'go',
      'author' => 'Jon Bodner',
      'ISBN' => 79643
    ],
    [
      'name' => 'Software Development with GO',
      'language' => 'go',
      'author' => 'Unknown',
      'ISBN' => 79643
    ]
  ];
 
  
  $filteredBooks = array_filter($books,function($item){
    return $item['language'] === 'go';
  });

  require "views/posts.view.php";

