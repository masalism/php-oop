<?php

$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'pdotest';

// Set dsn
$dsn = 'mysql:host=' . $host . ';dbname=' .$dbname;

// Create pdo instance
$pdo = new PDO($dsn, $user, $password);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
// $status = 'admin';
// $sql = "SELECT * FROM users WHERE status = :status";

// $stmt = $pdo->prepare($sql);
// $stmt->execute(['status' => $status]);
// $users = $stmt->fetchAll();

// foreach($users as $user) {
//     echo $user->name . '<br>';
// }

$name = 'Mantas Masalis';
$email = 'mantas@gmail.com';
$status = 'guest';

$sql = "INSERT INTO users(name, email, status) VALUES (:name, :email, :status)";

$stmt = $pdo->prepare($sql);
$stmt->execute(['name' => $name, 'email' => $email, 'status' => $status]);

echo 'Added user';
