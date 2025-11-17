<?php

try {
    $pdo = new PDO('mysql:host=localhost;dbname=cms', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec("SET CHARACTER SET utf8");
}
catch (PDOException $e) {
    $error = 'Database connection failed: ' . $e->getMessage();
    include 'error.php';
    exit();
}
