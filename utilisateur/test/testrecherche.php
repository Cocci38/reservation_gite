<?php
require '../Administrateur\initialisation.php';
require 'localisation.class.php';
require 'voyageur.class.php';
require 'dispo.class.php';

$lieux = 'Emplacement_geographique';
$nombre = 'Nombre_de_couchages';
$dispo = 'Disponibilite';

$isere = new Localisation('Isère');
$savoie = new Localisation('Savoie');
$nombre1 = new Voyageur(1);
$nombre2 = new Voyageur(2);
$nombre3 = new Voyageur(3);
$nombre4 = new Voyageur(4);
$nombre5 = new Voyageur(5);

$recherche = isset($_POST['recherche']) ? $_POST['recherche'] : '';

try{
$sth = $conn->prepare(
    "SELECT Emplacement_geographique, Nombre_de_couchages, Disponibilite FROM Hebergements
    WHERE Emplacement_geographique = '?' OR Nombre_de_couchages = '?' OR Disponibilite = 1");

$sth-> execute();
$resultat = $sth->fetchAll(PDO::FETCH_ASSOC);
echo '<pre>';
print_r($resultat);
echo '</pre>';
}
catch (PDOException $e) {
    echo 'Impossible de traiter les données. Erreur : ' . $e->getMessage();
}
if ($isere = true) {
    print_r($resultat);
}
?>