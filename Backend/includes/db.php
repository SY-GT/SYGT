<?php
// Configuration details
$host= "sql101.infinityfree.com"; // MySQL Host Name
$user = "if0_37965375";              // MySQL User Name
$password = "SYGT808GHOST";              // vPanel Password
$dbname = "if0_37965375_SYGT";           
// Create connection using PDO for better security
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>