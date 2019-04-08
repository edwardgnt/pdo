<?php

include_once('inc/connection.php');

// Create a PDO instance 
$pdo = new PDO($dsn, $username, $password);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);



# PREPARE STATEMENTS (prepare & execute)

// FETCH MULTIPLE POSTS

// User input
$author = 'Brad';
$is_published = true;

// Named parameters
$sql = 'SELECT * FROM posts WHERE author = :author && is_published = :is_published';
$stmt = $pdo->prepare($sql);
$stmt->execute(['author' => $author, 'is_published' => $is_published]);
$posts = $stmt->fetchAll();

foreach($posts as $post)
{
    echo $post->title . '<br>';
}