<?php

$host = 'localhost';
$dbname = 'myblog';
$user = 'root';
$password = '';

// Set DSN (Data Source Name)
$dsn = "mysql:host={$host};dbname={$dbname}";

// Create a PDO instance
$connect = new PDO($dsn, $user, $password);

$stmt = $connect->query('SELECT * FROM posts');

while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
	echo $row['title'] . '<br/>';
}