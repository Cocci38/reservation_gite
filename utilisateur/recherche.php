<?php
require '../Administrateur\initialisation.php';

$recherche = isset($_POST['recherche']) ? $_POST['recherche'] : '';

try{
$sth = $conn->prepare(
    "SELECT Emplacement_geographique, Nombre_de_couchages, arrivee, depart FROM Hebergements
    INNER JOIN Reservation_clients on Hebergements.id = Reservation_clients.Id_hebergement");

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