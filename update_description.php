<?php
require 'database.php'; 

try {
    $description = $_POST['description'];
    $restaurantID = $_POST['restaurantID'];

    $stmt = $pdo->prepare("UPDATE restaurant SET description = :description WHERE restaurantID = :restaurantID");
    $stmt->execute(['description' => $description, 'restaurantID' => $restaurantID]);

    echo 'Description updated successfully';
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

