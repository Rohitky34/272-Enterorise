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

$data= json_decode(file_get_contents("php://input"));

$productName = $data->productName;
$companyName = $data->companyName;
$email = $data->email;
$visited = $data->visited;
$visited++;

$sql = "UPDATE  Tracking SET visited = $visited where company_name = '$companyName'";
if ($conn->query($sql) === TRUE) {
    echo "True";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>