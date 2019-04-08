<?php

include_once('inc/connection.php');

// Create a PDO instance 
$pdo = new PDO($dsn, $username, $password);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);



# PREPARE STATEMENTS (prepare & execute)

// FETCH MULTIPLE POSTS

// User input
$author = 'Eddie';

// Positional params
$sql = 'SELECT * FROM posts WHERE author = ?';
$stmt = $pdo->prepare($sql);
$stmt->execute([$author]);

// Since set default fetchAll() left blank
$posts = $stmt->fetchAll();

// var_dump($posts);

foreach($posts as $post) 
{
    echo $post->title . '<br>';
}