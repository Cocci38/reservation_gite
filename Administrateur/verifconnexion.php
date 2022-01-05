<?php 

require '..//administrateur\initialisation .php';

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
/*header("location: ../administrateur\connexion.php");*/
echo "Identifiant ou mot de passe incorrect";


}

else {
    // header("location: authentification.php");

    header("location: ../utilisateur\index.php");
}




}


catch (PDOException $e) {
    echo 'Impossible de traiter les données. Erreur : ' . $e->getMessage();
}


?>