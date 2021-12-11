<?php
$servername = "localhost";
$username = "admin";
$password = "Hasbro@602";
$dbname = "cmpe_272_db";

$data= json_decode(file_get_contents("php://input"));
$email =  $data->email;
$passWord = $data->password;
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql="select * from users where email='$email' and password='$passWord'";
$result=mysqli_query($conn, $sql);

//print_r($result->num_rows);
if($result->num_rows){
    setcookie("email", $email, time() + 2 * 24 * 60 * 60);
    header('location:marketHome.php');

}else{
	echo "Failed";
}
mysqli_close($conn);
?>