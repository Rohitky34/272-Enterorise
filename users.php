<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
<div class="wrapper" style="width: 30%; margin: 0 auto;">
    <form class="form-signin" action='login.php' method="post">       
      <h2 class="form-signin-heading">User Login</h2><br/>
      <input type="text" class="form-control" name="username" placeholder="username" required="" autofocus="" /><br/>
      <input type="password" class="form-control" name="password" placeholder="Password" required=""/><br/>
      <button class="btn btn-small btn-primary btn-block" type="submit">Login</button>  
    </form>
</div>
 -->


 <!DOCTYPE html>
<html>
<head>
    <title>Center for Health in Hospital </title>
    <link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <header>
        <div class="main">
            <div class=" logo">
                <img src="logo.jpg" />
            </div>
            <ul>
                <li class="active"><a href="index.html">Home</a></li>

                <li><a href="about.html">About</a></li>
                <li><a href="products.html">Products/Services</a></li>

                <li><a href="news.html">News</a></li>
                <li><a href="contact.php">Contacts</a></li>
                <li><a href="users.php">Users</a></li>
		<li><a href="userSection.php">Users from Database</a></li>
 	<div class="paragraph">
        <pre><h1 class="h1Header" style={padding-left: 100px;}>
          User Section</h1>
        </pre>
      </div>
      <div class="row align-items-center">
      <div class="container">
        <a href="createUser.php" class="btn btn-primary">Create User</a>
        <a href="searchUser.php" class="btn btn-primary">Search User</a>
    </div>
    <?php 
    session_start();
    if (isset($_SESSION['result'])){
        echo '<h1>'.$_SESSION['result'].'</h1>';
        $_SESSION['result']="";
    }

    ?>
      </div>
                <li><a href="logout.php">Logout</a></li>


            </ul> 
        
</div>
   
   
    
 </header>
</body>
</html>