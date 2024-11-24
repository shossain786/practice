<?php
// include "helper.php";

$fileName = "users.txt";

if (isset($_GET['submit'])) {
    $username = $_GET['username'];
    $old_user = file_get_contents($fileName);
    $content = $old_user . "\n" . $username;
    file_put_contents($fileName, $content);
    header("location: index.php");
}
$users = file_get_contents($fileName);
$user_array = explode("\n", $users);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Application</title>
</head>

<body>
    <h1>User List</h1>
    <ul>
        <?php
        foreach ($user_array as $user) {
            echo "<li> $user <span>x</span></li>";
        }
        ?>
    </ul>
    <form action="index.php">
        <p>Enter Username: <input type="text", name="username"></p>
        <input type="submit", name="submit", value="Add User">
    </form>
</body>

</html>