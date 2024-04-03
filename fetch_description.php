<?php
require 'database.php'; // Include your database connection file

try {
    // Fetch the restaurant details
    $stmt = $pdo->prepare("SELECT description FROM restaurant WHERE restaurantID = :restaurantID");
    $stmt->execute(['restaurantID' => 1]); // Replace 1 with the actual restaurant ID

    $row = $stmt->fetch();
    echo $row['description'];

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

