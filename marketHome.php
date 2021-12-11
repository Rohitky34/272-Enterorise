



<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php
    print_r($_COOKIE["email"]);
    if (!isset($_COOKIE["email"]))
    {
   header('location:signedIn.php');
    }
    
?>
</head>

<body>
    <div class = "RealEstate">
        <button id="myButton1" class="float-left submit-button" style="background:; cursor:pointer">Real Estate Services</button>
        <script type="text/javascript">
            document.getElementById("myButton1").onclick = function () {
                location.href = "http://rohitky.me/";
            };
        </script>
    </div>
    <div class = "School">
        <a href="http://thisisjay.me/" onClick= 'setcookie("email", $email, time() + 2 * 24 * 60 * 60)'>
        <!-- <button id="myButton2" class="float-left submit-button" style="background:; cursor:pointer">School Services</button> -->
        <!-- <script type="text/javascript">
            document.getElementById("myButton2").onclick = function () {
                location.href = "http://thisisjay.me/";
            };
        </script> -->
    </div>
    <div class = "Cricket Shop">
        <button id="myButton3" class="float-left submit-button" style="background:; cursor:pointer">Cricket Shop</button>
        <script type="text/javascript">
            document.getElementById("myButton3").onclick = function () {
                location.href = "http://yamsanisaisanthosh.live/home.html#";
            };
        </script>
    </div>
    <div class = "Spartan Tours & Travels ">
        <button id="myButton4" class="float-left submit-button" style="background:; cursor:pointer">Spartan Tours & Travels</button>
        <script type="text/javascript">
            document.getElementById("myButton4").onclick = function () {
                location.href = "http://afrozinamdar.me/";
            };
        </script>
    </div>
</body>
</html>

