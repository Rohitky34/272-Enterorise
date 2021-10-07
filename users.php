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

<?php 
    $myFile = "users.txt";
    $contents = file_get_contents($myFile);
    $contents = explode("\n", $contents);

foreach($contents as $values){
     $loginInfo = explode(":", $values);
        $user = $loginInfo[0];
        $password = $loginInfo[1];

    if($user == $_POST['username'] && $password == $_POST['password']){
        session_start(); 
        header('Location: login.php');
   }
    else{
        echo '<script>alert("Please verify your username and password.");</script>'
    }
}
    ?>


