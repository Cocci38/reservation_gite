<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "reservation";


// 
try {
    $conn = new PDO("mysql:host=$servername", $username, $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    
    $sql = "CREATE DATABASE reservation";
    $conn->exec($sql);
  echo 'Base de données bien créée !';

} catch (PDOException $e) {
   echo "Erreur : " . $e->getMessage();
}