<?php
require 'db.php';

// Ensure the request is authenticated
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'], $_POST['type'])) {
    $id = (int) $_POST['id'];
    $type = htmlspecialchars($_POST['type']);

    if ($type === 'user') {
        $stmt = $pdo->prepare("DELETE FROM users WHERE id = :id");
    } elseif ($type === 'product') {
        $stmt = $pdo->prepare("DELETE FROM products WHERE id = :id");
    } else {
        die('Invalid type specified.');
    }

    $stmt->bindParam(':id', $id);
    if ($stmt->execute()) {
        echo "Record deleted successfully.";
    } else {
        echo "Failed to delete record.";
    }
} else {
    echo "Invalid request.";
}
?> 