<?php

include_once('inc/connection.php');

// Create a PDO instance 
$pdo = new PDO($dsn, $username, $password);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);


// User input
$author = 'Eddie';
$is_published = true;
$id = 1;


# DELETE DATA
$id = 3;

$sql = 'DELETE FROM posts WHERE id = ?';
$stmt = $pdo->prepare($sql);
$stmt->execute([$id]);
echo 'Post Deleted';