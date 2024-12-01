<?php
session_start();  // Start the session at the very beginning of the script
$page = isset($_GET['page']) ? $_GET['page'] : 'login';

if (!isset($_SESSION['username']) && $page !== 'login') {
    header("Location: index.php?page=login");
    exit();
}

switch ($page) {
    case 'login':
        include 'login.php';
        break;
    case 'home':
        include 'home.php';
        break;
    case 'about':
        include 'about.php';
        break;
    case 'dashboard':
        include 'dashboard.php';
        break;
    default:
        echo '<h1>404 Page Not Found</h1>';
        echo '<a href="index.php?page=login">Go to Login</a>';
        break;
}
