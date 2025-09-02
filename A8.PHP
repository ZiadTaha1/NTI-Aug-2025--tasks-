<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
   <style>
    .login {
      background: #fff;
      border-radius: 15px;
      padding: 40px;
      box-shadow: 0 8px 25px rgba(0,0,0,0.2);
      width: 100%;
      max-width: 400px;
    }
  
  </style>
</head>
<body class="bg-primary d-flex justify-content-center align-items-center vh-100">
    
    <div class="login" >
    
    <form action="profile.php" method="post">
      <div class="mb-3">
        <input type="text" class="form-control" name="username" placeholder="Username" required>
      </div>
      <div class="mb-3">
        <input type="email" class="form-control" name="email" placeholder="Email" required>
      </div>
      <div class="mb-3">
        <input type="password" class="form-control" name="pass" placeholder="Password" required>
      </div>
      <button type="submit" class="btn btn-primary w-100">Login</button>
    </form>
    </div>
     </div>
</body>
</html>