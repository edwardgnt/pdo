<?php

include_once('inc/conntection.php');

// Create a PDO instance 
$pdo = new PDO($dsn, $username, $password);

// Query PDO
$stmt = $pdo->query('SELECT * FROM posts');

while($row = $stmt->fetch(PDO::FETCH_OBJ)) {
    echo $row->title . '<br>';
}