<?php
$con = mysqli_connect("localhost", "root", "","hippo_talk");

// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$rs = mysqli_query($con,"SELECT * FROM `patient information` WHERE (id ='1')");

echo "<table border='1'>
<tr>
<th>First Name </th>
<th>Last Name </th>
<th>Phone Number </th>
<th>DOB </th>
<th>Address </th>
<th>City </th>
<th>Zip Code </th>
<th>State </th>
<th>Country </th>
</tr>";

while($row = mysqli_fetch_array($rs))
{
echo "<tr>";
echo "<td>" . $row['First Name'] . "</td>";
echo "<td>" . $row['Last Name'] . "</td>";
echo "<td>" . $row['Phone Number'] . "</td>";
echo "<td>" . $row['DOB'] . "</td>";
echo "<td>" . $row['Address'] . "</td>";
echo "<td>" . $row['City'] . "</td>";
echo "<td>" . $row['Zip Code'] . "</td>";
echo "<td>" . $row['State'] . "</td>";
echo "<td>" . $row['Country'] . "</td>";
echo "</tr>";
}
echo "</table>";
  
?>