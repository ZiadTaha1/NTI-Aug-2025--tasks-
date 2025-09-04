<?php
session_start();
include "db.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['pass'];


    $querey = "SELECT * FROM users WHERE username='$username'AND email='$email'";
    $result = mysqli_query($conn, $querey);
    $row = mysqli_fetch_assoc($result);

    if ($row && $password === $row['password']){
    $_SESSION['user_id'] = $row['id'];
    $_SESSION['username'] = $row['username'];
    $_SESSION['email'] = $row['email'];
        echo "loged in Succesfully <br>";
          header("Location: Update.php");
    exit;
    } else {
        echo "failed to log in";
    }
}
?>
<form method="post">
    Username <input type="text" name="username" placeholder="username" required>
    <br>
    Email <input type="text" name="email" placeholder="email" required>
    <br>
   Password <input type="password" name="pass" placeholder="password" required>
   <br>
    <button type="submit">Log in</button>
</form>