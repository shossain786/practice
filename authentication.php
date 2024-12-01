<?php
session_start();

$validUsername = "admin";
$validPassword = "1234";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === $validUsername && $password === $validPassword) {
        $_SESSION['username'] = $username;
        header("Location: index.php?page=home");
        exit();
    } else {
        header("Location: index.php?page=login&error=Invalid%20credentials");
        exit();
    }
} else {
    header("Location: index.php?page=login");
    exit();
}
