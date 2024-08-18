<?php

$con = mysqli_connect("localhost", "root", "","hippo_talk");

$height = $_POST['height'];
$weight = $_POST['weight'];
$Allergy = $_POST['Allergy'];
$VaccStat = $_POST['VaccStat'];
$Reason = $_POST['Reason'];
$Complaints = $_POST['Complaints'];
$Symptoms = $_POST['Symptoms'];
$Injury = $_POST['Injury'];
$Medication = $_POST['Medication'];


$sql = "INSERT INTO `medical information`(`Height`, `Weight`, `Allergy`, `Vaccination Status`, `Reason for Visit`, `Complaints`, `Symptoms`, `Injuries`, `Medication`) 
VALUES ('$height', '$weight', '$Allergy', '$VaccStat','$Reason', '$Complaints', '$Symptoms', '$Injury', '$Medication')";

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