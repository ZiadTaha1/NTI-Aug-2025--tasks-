<?PHP 
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['username'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    echo "Your username is: $name and your email is: $email and your password is: $pass";
} 
?>