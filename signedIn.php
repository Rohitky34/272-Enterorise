<?php
session_start();
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

$email = $emailID= $_POST['email']; 
$passWord = $password= $_POST['password'];


$sql="select * from users where email='$email' and password='$passWord'";
$result=mysqli_query($conn, $sql);
$count = 0;
//print_r($result->num_rows);
if($result->num_rows){
    // setcookie("email", $email, time() + 2 * 24 * 60 * 60);
    setcookie("count_real_estate", ++$count);
    $_SESSION["message"]="";
    header('location:marketHome.php');

}else{
	$_SESSION["message"]=" ";
        header('location:marketHome.php');
}
mysqli_close($conn);
?>