<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="css/isotope.css" media="screen" />
<link rel="stylesheet" href="js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
<link href="css/animate.css" rel="stylesheet" media="screen">
<!-- Owl Carousel Assets -->
<link href="js/owl-carousel/owl.carousel.css" rel="stylesheet">
<link rel="stylesheet" href="css/styles.css" />
<!-- Font Awesome -->
<link href="font/css/font-awesome.min.css" rel="stylesheet">
<h1>Property Data</h1>
<img src="https://www.google.com/search?q=property+images&rlz=1C1GCEA_enUS921US921&tbm=isch&source=iu&ictx=1&fir=J_9eY5Ca6vEC9M%252Ce9K1cRi3eU2uWM%252C_%253B8gSi_cWcyjxeWM%252CG9I-DR-NA4k42M%252C_%253BDXzfbFG7YBXivM%252Ce9K1cRi3eU2uWM%252C_%253BPCj5VWGURIThbM%252CG9I-DR-NA4k42M%252C_%253BnoJy3G_-XsTcZM%252C4p4bk_SRk6CfPM%252C_%253BhuZRAILPrVb5fM%252CSbnxrQvhNIuGfM%252C_%253BRKXj11vZoC1dhM%252CCNEUoRLY6-rkQM%252C_%253BdRoL-b_0v_1_6M%252CSbnxrQvhNIuGfM%252C_%253BD4DpBI1TLm5EuM%252Ct4N21jwB4CMcdM%252C_%253B7NQJLL-bu5bg9M%252Cduv88je_E-KvRM%252C_%253Bko8RozFdJsKVsM%252C4p4bk_SRk6CfPM%252C_%253BDihEIsW_r6MhFM%252CCNEUoRLY6-rkQM%252C_&vet=1&usg=AI4_-kTilshA7vhCOHck2mOsqJH4n8j1JQ&sa=X&sqi=2&ved=2ahUKEwj5zdnsqd30AhUQLewKHZpEDakQ9QF6BAgFEAE#imgrc=J_9eY5Ca6vEC9M">
<br>
<ul>
          <li>Blueprint</li>
          <li>Maps</li>
          <li>History</li>
        </ul>

<?php 
$path = "propertData";
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