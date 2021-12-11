<?php

// Google API configuration
define('GOOGLE_CLIENT_ID', '241666992878-marq2mhvmhus7tpu6v05pai77mq4ec4j.apps.googleusercontent.com');
define('GOOGLE_CLIENT_SECRET', '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');
define('GOOGLE_REDIRECT_URL', 'http://www.rohitky.me/check.php');

// Start session
if(!session_id()){
    session_start();
}

// Include Google API client library
require_once 'google-api-php-client/Google_Client.php';
require_once 'google-api-php-client/contrib/Google_Oauth2Service.php';

// Call Google API
$gClient = new Google_Client();
$gClient->setApplicationName('Login to coderglass.com');
$gClient->setClientId(GOOGLE_CLIENT_ID);
$gClient->setClientSecret(GOOGLE_CLIENT_SECRET);
$gClient->setRedirectUri(GOOGLE_REDIRECT_URL);

$google_oauthV2 = new Google_Oauth2Service($gClient);

?>