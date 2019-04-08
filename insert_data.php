<?php

include_once('inc/connection.php');

// Create a PDO instance 
$pdo = new PDO($dsn, $username, $password);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);


// User input
$author = 'Eddie';
$is_published = true;
$id = 1;


# INSERT DATA - Mock form
$title = 'Post Five';
$body = 'This is post five...';
$author = 'Eddie';

$sql = 'INSERT INTO posts(title, body, author) VALUES(?,?,?)';
$stmt = $pdo->prepare($sql);
$stmt->execute([$title, $body, $author]);
echo 'Post Added';
