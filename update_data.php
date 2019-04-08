<?php

include_once('inc/connection.php');

// Create a PDO instance 
$pdo = new PDO($dsn, $username, $password);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);


// User input
$author = 'Eddie';
$is_published = true;
$id = 1;


# UPDATE DATA - Mock Form
$id = 1;
$body = 'This is the updated post';

$sql = 'UPDATE posts SET body = ? WHERE id = ?';
$stmt = $pdo->prepare($sql);
$stmt->execute([$body, $id]);
echo 'Post Updated';
