<?php
// Start the session
session_start();

// Include the database connection
require_once "database.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the input values from the signup form
    $fullname = $_POST["fullname"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];

    // Validate password and confirm password match
    if ($password != $confirm_password) {
        // Redirect back to the signup page with an error message
        $_SESSION["error"] = "Passwords do not match";
        header("location: signup.html");
        exit();
    }

    // Prepare and execute the SQL statement to insert the new user into the database
    $stmt = $pdo->prepare("INSERT INTO user (userName, email, password) VALUES (:fullname, :email, :password)");
    $stmt->execute(['fullname' => $fullname, 'email' => $email, 'password' => $password]);

    // Redirect to a success page or login page
    header("location: index.html");
    exit();
} else {
    // Redirect to signup page if accessed directly without POST method
    header("location: signup.html");
    exit();
}
?>
