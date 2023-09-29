<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_game";
$port = "6603";
$charset = "utf8mb4";

$dsn = "mysql:host=$servername;dbname=$dbname;port=$port;charset=$charset";

try {
    $pdo = new PDO($dsn, $username, $password);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

return $pdo;

?>


