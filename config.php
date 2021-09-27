<?php

//start session on web page
session_start();

//config.php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('228414755811-3nvoc0dh04if866ht8srpo631r7b47c6.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('yRlm-GztEKZ2O5jJc43OpXZ8');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost/Louis_work/index.php');

// to get the email and profile 
$google_client->addScope('email');

$google_client->addScope('profile');

?>