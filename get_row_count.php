<?php

include_once('inc/connection.php');

// Create a PDO instance 
$pdo = new PDO($dsn, $username, $password);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);


// User input
$author = 'Eddie';
$is_published = true;
$id = 1;


# PREPARE STATEMENTS (prepare & execute)

// GET ROW COUNT
$stmt = $pdo->prepare('SELECT * FROM posts WHERE author = ?');
$stmt->execute([$author]);
$postCount = $stmt->rowCount();

echo $postCount;