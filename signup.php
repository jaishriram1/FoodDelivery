<?php
    session_start();
    include("backend.php");
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
      $email = $_POST["email"];
      $username = $_POST["username"]; 
      $password = $_POST["password"]; 

      if(!empty($email) && !empty($username) && !empty($password))
      {
        $query = "insert into login (email,username,password) values ('$email','$username','$password')";
        mysqli_query($con, $query);
        echo "<script type ='text/javascript'> alert('Successfully registered')</script>";

      }
      else{
        echo "<script type ='text/javascript'> alert('Enter some valid information')</script>";

      }

      
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="signup.css">
    <link rel="icon" href="logo.png" type="image/x-icon">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>sign-up</title>
</head>
<body>
    <div class="login">
        <form method="post">
    <h1>Sign-up</h1>
    <div class="input-box">
        <input type="text" placeholder="E-mail id" required name="email"/>
        <i class='bx bxs-user'></i>
    </div>
    <div class="input-box">
        <input type="text" placeholder="Username" required name="username"/>
        <i class='bx bxs-user'></i>
          </div>
          <div class="input-box">
            <input type="password" placeholder="Password" required name="password"/>
            <i class='bx bxs-lock'></i>
          </div>
      <div class="remember">
        Remember-me <input type="checkbox">
      </div>
        <button type="submit" class="btn">Registor</button>
        <div class="registor">
            <p>Already have an account?<a href="sign.php">Log-in</a></p>
        </div>
</form>
</div>
</body>
</html>