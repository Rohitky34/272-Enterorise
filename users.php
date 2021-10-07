<form method="post" action="login.php">
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
</form>

        <?php
$username = $_POST['username'];
$password = $_POST['password'];

if (isset($_POST['submitBtn'])){
$file = explode( "PHP_EOL", file_get_contents( "users.txt" ));
foreach( $file as $line ) {
list($username,$password) == explode( "||", $line );

if($_POST['username'] = $username && $_POST['password']) {
// User authenticated correctly
echo "You've successfully logged in!";
echo "<br>";
} else {
// User did not authenticate
echo "Invalid Username or Password";
}
}
} 
?>