<?php

$dsn = "mysql:host=localhost;dbname=venuefinder";
$dbuser="root";
$dbpassword="Elim@r.1526mysql";

try {
    $pdo = new PDO($dsn, $dbuser, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}