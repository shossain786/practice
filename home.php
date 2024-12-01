<?php
if (!isset($_SESSION['username'])) {
    header("Location: index.php?page=login");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/new_styles.css">
    <script src="js/jquery.js"></script>
    <script src="js/script.js"></script>
</head>
<body>
    <?php include 'nav.php'; ?>
    <div class="content">
        <h1>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h1>
        <p>This is the home page.</p>
    </div>
</body>
</html>
