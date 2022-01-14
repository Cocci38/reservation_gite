<?php
require '../Administrateur\initialisation.php';


/*$recherche = isset($_POST['recherche']) ? $_POST['recherche'] : '';*/
$recherche = 'recherche';
$recherche = isset($_POST['recherche']) || empty($_POST['recherche']);

try{
$sth = $conn->prepare(
    "SELECT Emplacement_geographique, Nombre_de_couchages, Disponibilite FROM Hebergements
    WHERE Emplacement_geographique = '' OR Nombre_de_couchages = '' OR Disponibilite = 1");

$sth-> execute();
$resultat = $sth->fetchAll(PDO::FETCH_ASSOC);
if ($recherche = $resultat) {
echo '<pre>';
print_r($resultat);
echo '</pre>';
}
}
catch (PDOException $e) {
    echo 'Impossible de traiter les données. Erreur : ' . $e->getMessage();
}

?>