<?php
$con = mysqli_connect("localhost", "root", "","hippo_talk");

//vars
$FirstName = $_POST['FirstName'];
$LastName = $_POST['LastName'];
$PhoneNum = $_POST['PhoneNum'];
$DOB = $_POST['DOB'];
$Address = $_POST['Address'];
$City = $_POST['City'];
$ZipCode = $_POST['ZipCode'];
$State = $_POST['State'];
$Country = $_POST['Country'];

//update info

$sql = "UPDATE `patient information` SET `First Name`='$FirstName',`Last Name`='$LastName',`Phone Number`='$PhoneNum',`DOB`='$DOB',`Address`='$Address'
,`City`='$City',`Zip Code`='$ZipCode',`State`='$State',`Country`='$Country' WHERE id=1";

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