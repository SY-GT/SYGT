<?php
require 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $productName = htmlspecialchars($_POST['product_name']);
    $price = (float) $_POST['price'];

    $stmt = $pdo->prepare("INSERT INTO products (name, price) VALUES (:name, :price)");
    $stmt->bindParam(':name', $productName);
    $stmt->bindParam(':price', $price);

    if ($stmt->execute()) {
        echo "Product added successfully.";
    } else {
        echo "Failed to add product.";
    }
}
?> 