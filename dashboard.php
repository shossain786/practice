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
    <title>About</title>
    <link rel="stylesheet" href="css/new_styles.css">
</head>
<body>
    <?php include 'nav.php'; ?>
</body>
</html>