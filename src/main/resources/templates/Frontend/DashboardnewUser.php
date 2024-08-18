<?php


$con = mysqli_connect("localhost", "root", "","hippo_talk");

$FirstName = $_POST['FirstName'];
$LastName = $_POST['LastName'];
$PhoneNum = $_POST['PhoneNum'];
$DOB = $_POST['DOB'];
$Address = $_POST['Address'];
$City = $_POST['City'];
$ZipCode = $_POST['ZipCode'];
$State = $_POST['State'];
$Country = $_POST['Country'];


$sql = "INSERT INTO `patient information` ( `First Name`, `Last Name`, `Phone Number`, `DOB`, `Address`, `City`, `Zip Code`, `State`, `Country`)
 VALUES ('$FirstName', '$LastName', '$PhoneNum','$DOB', '$Address', '$City','$ZipCode', '$State', '$Country')";

$rs = mysqli_query($con, $sql);


if ($rs) {
  header("Location: WelcomeBack.php");
  
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
