<?php
session_start();
require_once "database.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $role = $_POST["role"];
    $stmt = $pdo->prepare("SELECT * FROM user WHERE username = :username AND password = :password AND admin = :admin");
    $stmt->execute(['username' => $username, 'password' => $password, 'admin' => ($role == 'admin' ? 1 : 0)]);

    if ($stmt->rowCount() == 1) {
        $_SESSION["username"] = $username;
        $_SESSION["role"] = $role;
        setcookie("isLoggedIn", true, time() + (86400 * 30), "/");
        if ($role == 'admin') {
            header("location: adminResHome.html"); 
        } else {
            header("location: index.html"); 
        }
        exit();
    } else {
        $_SESSION["error"] = "Invalid username or password";
        header("location: login.php"); 
        exit();
    }
} else {
    header("location: login.php");
    exit();
}
?>
