<?php
// Configuration details
$host= "localhost"; // MySQL Host Name
$user = "root";              // MySQL User Name
$password = "";              // vPanel Password
$dbname = "";           
// Create connection using PDO for better security
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>
