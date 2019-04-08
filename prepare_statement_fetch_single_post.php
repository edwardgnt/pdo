<?php

include_once('inc/connection.php');

// Create a PDO instance 
$pdo = new PDO($dsn, $username, $password);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);



# PREPARE STATEMENTS (prepare & execute)

// FETCH SINGLE POST

// User input
$author = 'Eddie';
$is_published = true;
$id = 1;


$sql = 'SELECT * FROM posts WHERE id = :id';
$stmt = $pdo->prepare($sql);
$stmt->execute(['id' => $id]);
$post = $stmt->fetch();

?>

<h1><?php echo $post->title; ?></h1>
<p><?php echo $post->body; ?></p>

