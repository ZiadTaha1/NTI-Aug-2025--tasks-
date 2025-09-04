<?php
session_start();
include "db.php";

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit; 
}

$id = $_SESSION['user_id'];


$query = "SELECT * FROM users WHERE id=$id";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = !empty($_POST['password']) ? $_POST['password'] : $row['password'];

    $sql = "UPDATE users SET username='$username', password='$password' WHERE id=$id";
    if (mysqli_query($conn, $sql)) {
        echo "Password changed";
        $row['username'] = $username;
        $row['password'] = $password;
    } else {
        echo "خطأ: " . mysqli_error($conn);
    }
}
?>
<form method="post">
   Username: <input type="text" name="username" value="<?= $row['username'] ?>" required>
   <br>
   New password: <input type="password" name="password">
   <br>
   <button type="submit">Update</button>
</form>
