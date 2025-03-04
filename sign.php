<?php
    session_start();
    include("backend.php");
    if($_SERVER['REQUEST_METHOD'] == "POST") { 

      $username = $_POST["username"]; 
      $password = $_POST["password"]; 


      if(!empty($username) && !empty($password)){

        $query = "select * from login where username = '$username' limit 1";
        $result = mysqli_query($con, $query);

        if($result)
        {
            if($result && mysqli_num_rows($result) > 0)
            {
                $user_data = mysqli_fetch_assoc($result);

                if($user_data["password"] == $password)
                {
                    header("locaction: connect.php");
                    die;
                }
            }
        }
        echo "<script type ='text/javascript'> alert('Wrong username or password')</script>";
      }
      else{
        echo "<script type ='text/javascript'> alert('Wrong username or password')</script>";
      }
    }


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="signin.css">
    <link rel="icon" href="logo.png" type="image/x-icon">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>sign-up</title>
</head>
<body>
    <div class="login">
        <form method="post">
    <h1>Login</h1>
    <div class="input-box">
        <input type="text" placeholder="Username" required name="username">
        <i class='bx bxs-user'></i>
          </div>
          <div class="input-box">
            <input type="password" placeholder="Password" required name="password">
            <i class='bx bxs-lock'></i>
          </div>
        <div class="remember-forgot">
           <!-- <lebel><input type="checkbox">Remember me</lebel>-->
            <a href="">Forgot password?</a>
        </div>
        <button type="submit" class="btn">Login</button>
        <div class="registor">
            <p>Don't have an account?<a href="signup.php"> sign-up</a></p>
        </div>
</form>
</div>
</body>
</html>