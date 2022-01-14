<?php
require '../Administrateur\initialisation.php';

$sql = "SELECT Emplacement_geographique, Nombre_de_couchages, Disponibilite FROM Hebergements
WHERE Emplacement_geographique = '' AND Nombre_de_couchages = '' AND Disponibilite = ''";

if($_POST['Emplacement_geographique'] && $_POST['Nombre_de_couchages']){
    "SELECT Emplacement_geographique, Nombre_de_couchages, FROM Hebergements
    WHERE";
}
elseif($_POST['Emplacement_geographique']){
    "SELECT Emplacement_geographique, FROM Hebergements
    WHERE";
}
elseif($_POST['Nombre_de_couchages']){
    "SELECT Nombre_de_couchages, FROM Hebergements
    WHERE";
}
elseif($_POST['Emplacement_geographique'] && $_POST['Nombre_de_couchages'] && $_POST['Disponibilite']){
    "SELECT Emplacement_geographique, Nombre_de_couchages, Disponibilite FROM Hebergements
    WHERE";
}
else echo 'Il n\'y a pas d\'hébergement disponible';

try{
$sth = $conn->prepare(
    $sql);

$sth-> execute();
$resultat = $sth->fetchAll(PDO::FETCH_ASSOC);

echo '<pre>';
print_r($resultat);
echo '</pre>';
}

catch (PDOException $e) {
    echo 'Impossible de traiter les données. Erreur : ' . $e->getMessage();
}
?>