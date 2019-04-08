<?php

include_once('inc/connection.php');

// Create a PDO instance 
$pdo = new PDO($dsn, $username, $password);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);


// User input
$author = 'Eddie';
$is_published = true;
$id = 1;
$limit = 1;

// SEARCH DATA
$sql = 'SELECT * FROM posts WHERE author = ? && is_published = ? LIMIT ?';
$stmt = $pdo->prepare($sql);
$stmt->execute([$author, $is_published, $limit]);
$posts = $stmt->fetchAll();

foreach($posts as $post)
{
    echo $post->title . '<br>';
}