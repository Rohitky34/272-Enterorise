<?php
session_start();
$firstName = "";
$lastName = "";
$email = "";
$address = "";
$homePhone = "";
$cellPhone = "";
$password = "";
$servername = "localhost";
$username = "root";
$password1 = "Hasbro@602";

$db = mysqli_connect($servername, $username, $password1, 'CMPE272');
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
  }

$firstName = mysqli_real_escape_string($db, $_POST['first']);
$lastName = mysqli_real_escape_string($db, $_POST['last']);
$email = mysqli_real_escape_string($db, $_POST['email']);
$address = mysqli_real_escape_string($db, $_POST['address']);
$homePhone = mysqli_real_escape_string($db, $_POST['homephone']);
$cellPhone = mysqli_real_escape_string($db, $_POST['cellphone']);
$password = mysqli_real_escape_string($db, $_POST['password']);
$password = md5($password);
$query = "INSERT INTO Users (firstname, lastname, email, adress, homephone, cellphone, password) VALUES ('$firstName', '$lastName', '$email', '$address', '$homePhone', '$cellPhone', '$password')";
if (mysqli_query($db, $query)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $query . "<br>" . mysqli_error($db);
  }
$_SESSION['first'] = $firstName;
$_SESSION['success'] = "You are now logged in and registered.";
mysqli_close($db);
?>