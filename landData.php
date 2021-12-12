<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="css/isotope.css" media="screen" />
<link rel="stylesheet" href="js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
<link href="css/animate.css" rel="stylesheet" media="screen">
<!-- Owl Carousel Assets -->
<link href="js/owl-carousel/owl.carousel.css" rel="stylesheet">
<link rel="stylesheet" href="css/styles.css" />
<!-- Font Awesome -->
<link href="font/css/font-awesome.min.css" rel="stylesheet">
<h1>Land Data</h1>
<img src="https://www.google.com/imgres?imgurl=https%3A%2F%2Fwww.eea.europa.eu%2Fdata-and-maps%2Ffigures%2Ftrends-in-the-share-of-agricultural-land-managed-by-low-input-medium-input-or-high-input-farm-types%2Fimage_large&imgrefurl=https%3A%2F%2Fwww.eea.europa.eu%2Fdata-and-maps%2Ffigures%2Ftrends-in-the-share-of-agricultural-land-managed-by-low-input-medium-input-or-high-input-farm-types&tbnid=vLWqqmIl2HatTM&vet=12ahUKEwi4rL6Oqt30AhUMop4KHWr-C-MQMygLegUIARDFAQ..i&docid=g0Xi7SpVJzVtyM&w=768&h=717&q=agriculture%20land%20data%20images&ved=2ahUKEwi4rL6Oqt30AhUMop4KHWr-C-MQMygLegUIARDFAQ">
<br>
<ul>
          <li>Sale Value</li>
          <li>Purchase Value</li>
          <li>History</li>
        </ul>

<?php 
$path = "landData";
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