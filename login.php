<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "practice";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $uemail = mysqli_real_escape_string($conn, $_POST['uname']);
    $upassword = mysqli_real_escape_string($conn, $_POST['upassword']);

    $sql = "SELECT * FROM user_table WHERE uemail = ? AND upassword = ?";

    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("ss", $uemail, $upassword);

        $stmt->execute();

        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            $_SESSION['username'] = $uemail;
            header("Location: index.php?page=home");
            exit();
        } else {
            $error = "Invalid username or password.";
        }

        $stmt->close();
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/new_styles.css">
    <script src="js/jquery.js"></script>
    <script src="js/script.js"></script>
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <?php if (isset($error)) { echo "<p style='color: red;'>$error</p>"; } ?>
        
        <form action="index.php?page=login" method="POST">
            <label for="uname">Username:</label>
            <input type="text" id="uname" name="uname" required>

            <label for="upassword">Password:</label>
            <input type="password" id="upassword" name="upassword" required>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
