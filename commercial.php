<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="css/isotope.css" media="screen" />
<link rel="stylesheet" href="js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
<link href="css/animate.css" rel="stylesheet" media="screen">
<!-- Owl Carousel Assets -->
<link href="js/owl-carousel/owl.carousel.css" rel="stylesheet">
<link rel="stylesheet" href="css/styles.css" />
<!-- Font Awesome -->
<link href="font/css/font-awesome.min.css" rel="stylesheet">
<h1>Courses offered by our School</h1>
<img src="https://www.google.com/imgres?imgurl=https%3A%2F%2Fimages.adsttc.com%2Fmedia%2Fimages%2F5e66%2F5dc0%2Fb357%2F65bd%2Fdb00%2F0024%2Fnewsletter%2F10.jpg%3F1583766967&imgrefurl=https%3A%2F%2Fwww.archdaily.com%2F935230%2Fhow-to-build-sustainable-healthy-and-profitable-office-buildings-in-10-simple-steps&tbnid=cfLSHvvspZX8lM&vet=12ahUKEwjwvfaOqd30AhUKmJ4KHXtrDP8QMygAegUIARCCAg..i&docid=nkQyhAGYRxzrRM&w=750&h=750&itg=1&q=offices%20building%20images&ved=2ahUKEwjwvfaOqd30AhUKmJ4KHXtrDP8QMygAegUIARCCAg">
<br>
<ul>
          <li>Offices</li>
          <li>Schools</li>
        </ul>

<?php 
$path = "commercial";
if (!isset($_COOKIE[$path]['count']))
{
    ?>
    Welcome! This is the first time you have viewed this page. 
<?php
    $cookie = 1;
    setcookie($path."[count]", $cookie);
}
else
{
    $cookie = ++$_COOKIE[$path]['count'];
    // $path = "courses";
    setcookie($path."[count]", $cookie);
    // setcookie($_COOKIE['path']['count'], $cookie);
    ?>  
    You have viewed this page <?= $_COOKIE[$path]['count'] ?> times. 
<?php
    }
?>