<?php
session_start(); // Start the session
require_once "database.php"; // Include the database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the input values from the login form
    $username = $_POST["username"];
    $password = $_POST["password"];
    $role = $_POST["role"];

    // Prepare and execute the SQL statement to retrieve the user from the database
    $stmt = $pdo->prepare("SELECT * FROM user WHERE username = :username AND password = :password AND admin = :admin");
    $stmt->execute(['username' => $username, 'password' => $password, 'admin' => ($role == 'admin' ? 1 : 0)]);

    // Check if the user exists
    if ($stmt->rowCount() == 1) {
        // User exists, set session variables and redirect
        $_SESSION["username"] = $username;
        $_SESSION["role"] = $role;
        setcookie("isLoggedIn", true, time() + (86400 * 30), "/");
        if ($role == 'admin') {
            header("location: adminTest.html"); // Redirect to admin page
        } else {
            header("location: index.html"); // Redirect to user page
        }
        exit();
    } else {
        // User does not exist or incorrect credentials, redirect to login page with error message
        $_SESSION["error"] = "Invalid username or password";
        header("location: login.php"); // Redirect to login page
        exit();
    }
} else {
    // Redirect to login page if accessed directly without POST method
    header("location: login.php");
    exit();
}
?>
