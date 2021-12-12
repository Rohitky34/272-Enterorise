<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="css/isotope.css" media="screen" />
<link rel="stylesheet" href="js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
<link href="css/animate.css" rel="stylesheet" media="screen">
<!-- Owl Carousel Assets -->
<link href="js/owl-carousel/owl.carousel.css" rel="stylesheet">
<link rel="stylesheet" href="css/styles.css" />
<!-- Font Awesome -->
<link href="font/css/font-awesome.min.css" rel="stylesheet">
<h1>Industries</h1>
<img src="https://www.google.com/imgres?imgurl=https%3A%2F%2Fwww.thespruce.com%2Fthmb%2FYUEde4e76xf3w31ikQk6OTWBkDc%3D%2F3475x2289%2Ffilters%3Afill(auto%2C1)%2Flarge-and-old-brick-industrial-building-175426710-98e94f0565724b5eb938d78727e0bfa5.jpg&imgrefurl=https%3A%2F%2Fwww.thespruce.com%2Fwhat-is-industrial-architecture-4796580&tbnid=CVSaHmDIIRbTlM&vet=12ahUKEwjkoM3Eqd30AhWIlJ4KHTFSBXEQMygGegUIARDeAQ..i&docid=Ni5YgQbCCi9jQM&w=3475&h=2289&q=industrial%20building%20images&ved=2ahUKEwjkoM3Eqd30AhWIlJ4KHTFSBXEQMygGegUIARDeAQ">
<br>
<ul>
          <li>Factory</li>
          <li>Warehouse</li>
        </ul>

<?php 
$path = "industrial";
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