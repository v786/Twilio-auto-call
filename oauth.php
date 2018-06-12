<?php
require_once 'vendor/autoload.php';

if(isset($_POST['OAuth'])){
  $id_token = $_POST['idtoken'];
}
else{
  $id_token = "Null";
}

echo "sub ->".$id_token;
?>