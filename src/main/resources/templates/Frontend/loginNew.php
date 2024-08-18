<?php
require 'database.php';
$con = mysqli_connect("localhost", "root", "","hippo_talk");

if(!empty($_SESSION["id"])){
  header("Location: Dashboard.php");
}
if(isset($_POST["submit"])){
  $Username = $_POST["Username"];
  $Password = $_POST["Password"];
  
  $result = mysqli_query($con, "SELECT * FROM `user` WHERE Username = '$Username'");
  $row = mysqli_fetch_assoc($result);

  if(mysqli_num_rows($result) > 0){
    if(password_verify($Password, $row['myPassword'])){
      $_SESSION["login"] = true;
      $_SESSION["id"] = $row["id"];
      header("Location: Welcome.html");
    }
    else{
      echo
      "<script> alert('Wrong Password'); </script>";
    }
  }
  else{
    echo
    "<script> alert('User Not Registered'); </script>";
  }
}
?>
<!DOCTYPE html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Login Form</title>
    <link rel="shortcut icon" href="/assets/favicon.ico">
    <link rel="stylesheet" href="login.css">
</head>

<body>

    <div class="container">
        <form class="form"  method="post">
            <h1 class="form__title">Login</h1>
            <div class="form__input-group">


                <input type="text" name="Username" class="form__input" id="Username" autofocus placeholder="Username">


            </div>
            <div class="form__input-group">

                <input type="Password" name="Password" class="form__input" id="Password" autofocus
                    placeholder="Password">

            </div>

            <input type="submit" class="btn btn-primary w-100" value="Login" name="submit">
        </form>
    </div>
</body>