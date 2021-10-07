<form action="sessionOpen.php" method="post">
   <h2>Username:</h2><input type="text" id="username"><br>
   <h2>Password:</h2><input type="password" id="password"><br>
   <input type="submit" value ="submit">
    <input type="reset" value ="reset">
</form>

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
        header('Location: users.php');
   }
    else{
        echo '<script>alert("Please verify your username and password.");</script>'
    }
}
?>