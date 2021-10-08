<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
<div class="wrapper" style="width: 30%; margin: 0 auto;">
    <form class="form-signin" action='login.php' method="post">       
      <h2 class="form-signin-heading">User Login</h2><br/>
      <input type="text" class="form-control" name="username" placeholder="username" required="" autofocus="" /><br/>
      <input type="password" class="form-control" name="password" placeholder="Password" required=""/><br/>
      <button class="btn btn-small btn-primary btn-block" type="submit">Login</button>  
    </form>
</div>
    <?php 
    function check_password($username, $password){
        $pwd_file = 'userAdmin.txt';
        if(!$fh = fopen($pwd_file, "r")) {die("<p>Could not open password file");}
        $match = 0;
        $pwd = $password;
        while(!feof($fh)) {
          $line = fgets($fh, 4096);
          $user_pass = explode(":", $line);
          if($user_pass[0] == $username) {
            if(rtrim($user_pass[1]) == rtrim($pwd)) {
              $match = 1;
              break;
            }
          }
          $match = 2; 
        }
        if($match == '1') {
           header("Location: login.php");
        } 
        if($match == '2') {
           echo "<b>Login Failed!</b>";
        } 
        fclose($fh);
    }
    if($_POST['username']) {
        check_password($_POST['username'], $_POST['password']);
    }
    ?>
