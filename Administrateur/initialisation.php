<?php 

try {
// Overture session :

session_start();
if($_SERVER ['HTTP_HOST']=='localhost') {
    require_once "config.php";
  } else {
    require_once "config_en_ligne.php"; 
  }

// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "reservation";

$conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=UTF8", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    echo 'Impossible de traiter les données. Erreur : ' . $e->getMessage();
}
?>