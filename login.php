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
           echo "<b>Login Successful, List of Users are</b>";
           <br/>
           $file = fopen("users.txt","r");

            while(! feof($file))
            {
            echo fgets($file). "<br />";
            }

        fclose($file);
        } 
        if($match == '2') {
           echo "<b>Login Failed Please Check Your Credentials</b>";
        } 
        fclose($fh);
    }
    if($_POST['username']) {
        check_password($_POST['username'], $_POST['password']);
    }
    ?>

