<?php
session_start();

//Include Google client library 
include_once 'src/Google_Client.php';
include_once 'src/contrib/Google_Oauth2Service.php';

/*
 * Configuration and setup Google API
 */
$clientId = '800420095154-8edpdijeulvsg3j57ipdagva7sigmiq9.apps.googleusercontent.com'; //Google client ID
$clientSecret = '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'; //Google client secret

$redirectURL = 'http://rohitky.me/services.php'; //Callback URL

//Call Google API
$gClient = new Google_Client();
$gClient->setApplicationName('Login to CodexWorld.com');
$gClient->setClientId($clientId);
$gClient->setClientSecret($clientSecret);
$gClient->setRedirectUri($redirectURL);

$google_oauthV2 = new Google_Oauth2Service($gClient);
?>