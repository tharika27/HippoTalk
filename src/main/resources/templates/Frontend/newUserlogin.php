

<?php

if (empty($_POST["Username"])) {
  die("Username is required");
}

if ( ! filter_var($_POST["EmailAddress"], FILTER_VALIDATE_EMAIL)) {
  die("Valid email is required");
}

if (strlen($_POST["myPassword"]) < 8) {
  die("Password must be at least 8 characters");
}

if ( ! preg_match("/[a-z]/i", $_POST["myPassword"])) {
  die("Password must contain at least one letter");
}

if ( ! preg_match("/[0-9]/", $_POST["myPassword"])) {
  die("Password must contain at least one number");
}


if ($_POST["myPassword"] !== $_POST["ConfirmPassword"]) {
  die("Passwords do not match");
}


$password_hash = password_hash($_POST['myPassword'], PASSWORD_DEFAULT);

$mysqli = require __DIR__ . "/database.php";

//connection and saving data
$con = mysqli_connect("localhost", "root", "","hippo_talk");

$Username = $_POST['Username'];
$EmailAddress = $_POST['EmailAddress'];
$myPassword = $_POST['myPassword'];


$sql = "INSERT INTO `user` (`Username`, `EmailAddress`, `myPassword`) VALUES ('$Username', '$EmailAddress', '$password_hash')";
$rs = mysqli_query($con, $sql);



if ($rs) {

  
  header("Location: loginNew.php");
  
  exit;
  
} else {
  
  if ($mysqli->errno === 1062) {
      die("email already taken");
  } else {
      die($mysqli->error . " " . $mysqli->errno);
  }
}



if($rs)
{
echo "Account Saved";
}

?>

<