



<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php
    $servername = "localhost";
    $username = "admin";
    $password = "Hasbro@602";
    $dbname = "cmpe_272_db";
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    if (!isset($_COOKIE["email"]))
    {
   header('location:signedIn.php');
    }
    $company_name_school= 'B-School';
    $company_name_real_estate= 'Real_Estate';
    $company_name_spartan= 'Spartan';
    $company_name_cricket= 'Cricket';
    //School
    $sql="select visited from Tracking where email='$company_name_school'";
    $result=mysqli_query($conn, $sql);
    $max_Count = 0;
    if ($result->num_rows > 0) {
        $Count_School = $row["visited"];
    } 
    //Real Estate 
    $sql="select visited from Tracking where email='$company_name_real_estate'";
    $result=mysqli_query($conn, $sql);
    $Count_Estate = 0;
    if ($result->num_rows > 0) {
        $Count_Estate = $row["visited"];
    } 
    //Spartan
    $sql="select visited from Tracking where email='$company_name_spartan'";
    $result=mysqli_query($conn, $sql);
    $Count_Spartan = 0;
    if ($result->num_rows > 0) {
        $Count_Spartan = $row["visited"];
    } 
    //Cricket
    $sql="select visited from Tracking where email='$company_name_spartan'";
    $result=mysqli_query($conn, $sql);
    $company_name_cricket = 0;
    if ($result->num_rows > 0) {
        $company_name_cricket = $row["visited"];
    } 
?>
</head>

<body>
    <div class = "RealEstate">
        <button id="myButton1" class="float-left submit-button" style="background:; cursor:pointer">Real Estate Services</button>
        <?php
         echo $Count_Estate;
        ?>
        <script type="text/javascript">
            document.getElementById("myButton1").onclick = function () {
                location.href = "http://rohitky.me/";
            };
        </script>
    </div>
    <div class = "School">
        <button id="myButton2" class="float-left submit-button" style="background:; cursor:pointer">School Services</button> -->
        <?php
         echo $company_name_school;
        ?>
        <script type="text/javascript"> -->
            document.getElementById("myButton2").onclick = function () {
                location.href = "http://thisisjay.me/";
            };
        </script>
    </div>
    <div class = "Cricket Shop">
        <button id="myButton3" class="float-left submit-button" style="background:; cursor:pointer">Cricket Shop</button>
        <?php
         echo $company_name_spartan;
        ?>
        <script type="text/javascript">
            document.getElementById("myButton3").onclick = function () {
                location.href = "http://yamsanisaisanthosh.live/home.html#";
            };
        </script>
    </div>
    <div class = "Spartan Tours & Travels ">
        <button id="myButton4" class="float-left submit-button" style="background:; cursor:pointer">Spartan Tours & Travels</button>
        <?php
         echo $company_name_cricket;
        ?>
        <script type="text/javascript">
            document.getElementById("myButton4").onclick = function () {
                location.href = "http://afrozinamdar.me/";
            };
        </script>
    </div>

</body>
</html>

