<html>
<head>
<title> Reg Page   </title>
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
    <td> <input type="submit" name="reg" value="REG"></td>
    <td></td>
  </tr>
</table>
</form>
</body>
</html>
<?php
$userN = $_POST['user-name'];
$passW = $_POST['pass-word'];
$userlist = file ('users.txt');

$email = "";
$company = "";

$success = false;
foreach ($userlist as $user) {
    $user_details = explode('|', $user);
    if ($user_details[0] == $userN && $user_details[1] == $passW) {
        $success = true;
        $email = $user_details[2];
        $company = $user_details[3];
        break;
    }
}

if ($success) {
    echo "<br> Hi $userN you have been logged in. <br>";
} else {
    echo "<br> You have entered the wrong username or password. Please try again. <br>";
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
