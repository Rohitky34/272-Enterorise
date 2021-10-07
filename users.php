<html>
<head>
<title> Login Page   </title>
</head>
<body>
<form action="" method="post">
    <table width="200" border="0">
  <tr>
    <td>  UserName</td>
    <td> <input type="text" name="user" > </td>
  </tr>
  <tr>
    <td> PassWord  </td>
    <td><input type="password" name="pass"></td>
  </tr>
  <tr>
    <td> <input type="submit" name="login" value="LOGIN"></td>
    <td></td>
  </tr>
</table>
</form>
</body>
</html>
<?php  session_start(); ?>  // session starts with the help of this function 
 
<?php
 
if(isset($_SESSION['use']))   // Checking whether the session is already there or not if 
                              // true then header redirect it to the home page directly 
 {
    header("Location:users.php"); 
 }
else
{
    include 'login.php';
}
 
if(isset($_POST['login']))   
{
     $user = $_POST['user'];
     $pass = $_POST['pass'];
 
    if(isset($_POST["user"]) && isset($_POST["pass"])){
    $file = fopen('users.txt', 'r');
    $good=false;
    while(!feof($file)){
        $line = fgets($file);
        $array = explode(";",$line);
    if(trim($array[0]) == $_POST['user'] && trim($array[1]) == $_POST['pass']){
            $good=true;
            break;
        }
    }
 
    if($good){
    $_SESSION['use'] = $user;
        echo '<script type="text/javascript"> window.open("users.php","_self");</script>';  
    }else{
        echo "invalid UserName or Password";
    }
    fclose($file);
    }
    else{
        include 'login.php';
    }
 
}
?>


<!-- <form action=" " method="post">
    <table border="0" cellpadding="0">
        <tr>
            <td align="center" colspan="5">
                    <h4>User Login <br /><small>Please Login to the portal.</small></h4>
            </td>
        </tr>
        <tr>
            <td align="right"><b>Username:</b></td>
            <td align="left"><input type="text" name="username" /></td>                     
        </tr>   
        <tr>
            <td align="right"><b>Password:</b></td>
            <td align="left"><input type="password" name="password"/></td>
        </tr>

        <tr>
            <td align="left"><input type="submit" value="Login" name="submitBtn"/>
            <input type="reset" value="Reset" name="reset"/></td>
</form> -->
