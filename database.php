<?php
// Database configuration
$host = 'localhost';
$dbname = 'foodhaven';
$username = 'root';
$password = ''; 

try {
    // Attempt to connect to the database
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
    
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Check if the PDO object is created successfully
    if ($pdo instanceof PDO) {
        echo "Database connection established successfully.";
    } else {
        echo "Failed to establish database connection.";
    }
    
    // Execute a test query
    $stmt = $pdo->query("SELECT CURRENT_TIMESTAMP");
    // If no exception is thrown, the query executed successfully
} catch (PDOException $e) {
    // If connection fails, display error message
    die("Database connection failed: " . $e->getMessage());
}
?>
