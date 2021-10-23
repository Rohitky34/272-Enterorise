<?php
$servername = "localhost";
$username = "admin";
$password1 = "Hasbro@602";
$conn = mysqli_connect($servername, $username, $password1, 'company_272');
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
 $search =$_POST['search'];
 $sql = "select * from Users where email like '%$search%' or firstname like '%$search%' or homephone like '%$search%' or cellphone like '%$search%'";
         $result = $conn->query($sql);
         if ($result->num_rows > 0){
            while($row = $result->fetch_assoc() ){
	            echo $row["firstname"]."  ".$row["lastname"]."  ".$row["email"].  $row["adress"]."  ". $row["homephone"]."  ". $row["cellphone"]."  "." <br>";
            }
        } else {
        	echo "0 records";
        }
?>