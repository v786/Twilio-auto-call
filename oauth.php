<?php
session_start();
require_once 'vendor/autoload.php';

if(isset($_POST['idtoken'])){
  $_SESSION['id'] = $_POST['idtoken'];
  $id_token = $_SESSION['id'];
}
else{
  $id_token = $_SESSION['id'];
}

$CLIENT_ID = "519089083514-54di2to9gc7c5q5k62btjml8vt6tjahg.apps.googleusercontent.com";

$client = new Google_Client(['client_id' => $CLIENT_ID]);  // Specify the CLIENT_ID of the app that accesses the backend
$payload = $client->verifyIdToken($id_token);
if ($payload) {
  $userid = $payload['sub'];
  $email = $payload['email']; 
  $_SESSION['email'] = $email;
  // If request specified a G Suite domain:
  //$domain = $payload['hd'];
} else {
  // Invalid ID token
}
echo "sub ->".$_SESSION['email'];
?>