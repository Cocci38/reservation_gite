<?php 

require 'initialisation.php' ;

try {
$admin = $_POST["Nom_admin"];
$motdepasse = $_POST["Mot_de_passe"];

$util = "SELECT * From Administrateur where Nom_admin='$admin' and Mot_de_passe='$motdepasse'";
$sth = $conn->prepare($util);
$sth->execute();
$result = $sth->fetch();
$_SESSION['result']=$result;

if (empty($_SESSION['result']) )
    {

echo "Identifiant ou mot de passe incorrect";

header("location:connexion.php");
echo "Identifiant ou mot de passe incorrect";
}
else {

echo 'connexion réussie '; 

    header("location:indexheb.php");
}
}
catch (PDOException $e) {
    echo 'Impossible de traiter les données. Erreur : ' . $e->getMessage();
}


?>