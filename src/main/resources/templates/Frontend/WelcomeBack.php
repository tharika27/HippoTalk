
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hippo Talk</title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="./assets/images/favicon.png">
    <!-- Remix icons -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <!-- Swiper.js styles -->
    <link rel="stylesheet" href="./assets/css/swiper-bundle.min.css"/>
    <!-- Custom styles -->
    <link rel="stylesheet" href="Dashboard.css">
</head>
<body>
    <!-- Header -->
    <header class="header" id="header">

        <nav class="navbar container">
            <a href="./index.html">
                <h2 class="logo">Welcome Tharika </h2>
            </a>

            <div class="menu" id="menu">
                <ul class="list">
                    <li class="list-item">
                        <a href="#" class="list-link current">Home</a>
                    </li>
                    <li class="list-item">
                        <a href="#" class="list-link">Contact</a>
                    </li>
                    <li class="list-item screen-lg-hidden">
                        <a href="login.php" class="list-link">Log out</a>
                    </li>
                </ul>
            </div>

            <div class="list list-right">
                <button class="btn place-items-center" id="theme-toggle-btn">
                    <i class="ri-sun-line sun-icon"></i>
                    <i class="ri-moon-line moon-icon"></i>
                </button>

                <button class="btn place-items-center" id="search-icon">
                    <i class="ri-search-line"></i>
                </button>

                <button class="btn place-items-center screen-lg-hidden menu-toggle-icon" id="menu-toggle-icon">
                    <i class="ri-menu-3-line open-menu-icon"></i>
                    <i class="ri-close-line close-menu-icon"></i>
                </button>

                <a href="#" class="list-link screen-sm-hidden">Sign in</a>
                <a href="#" class="btn sign-up-btn fancy-border screen-sm-hidden">
                    <span>Sign up</span>
                </a>
            </div>

        </nav>

    </header>

    <!-- Search -->
    <div class="search-form-container container" id="search-form-container">

        <div class="form-container-inner">

            <form action="" class="form">
                <input class="form-input" type="text" placeholder="What are you looking for?">
                <button class="btn form-btn" type="submit">
                    <i class="ri-search-line"></i>
                </button>
            </form>
            <span class="form-note">Or press ESC to close.</span>

        </div>

        <button class="btn form-close-btn place-items-center" id="form-close-btn">
            <i class="ri-close-line"></i>
        </button>

    </div>

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <center><h1>Patient Portal</h1></center>
    <br>
    
    
    <h2 style="margin-left:400px;"> My Profile </h2>


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

    <br>
        <br><br>
        
    

    <a href="medicalInfo.html">

        <br>
        <br>
        
        <h2 style="margin-left:300px;"><button class="block">Ready for an Appointment?</button></h2>
        <br>


    </a>

    <br>

    <a href="review.php">
        
        <h2 style="margin-left:310px;""><button class="block">Update Information Here</button></h2>
    </a>



</body>


</html>

    <!-- Swiper.js -->
    <script src="./assets/js/swiper-bundle.min.js"></script>
    <!-- Custom script -->
    <script src="Dashboard.js"></script>

</div>
