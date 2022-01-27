<?php
require '../Administrateur\initialisation.php';

$sth2 = $conn->prepare("SELECT * FROM hebergements where Id= id");
$sth2 -> bindValue (":id" , $_GET['Id'] );
$sth2->execute();
$resultat = $sth2->fetch(PDO::FETCH_ASSOC);

try {
    $sth3 = $conn->prepare("INSERT INTO Reservation_clients(Id_hebergement) SELECT(Id) FROM hebergements
                            VALUES ($resultat)");
    $sth3->bindParam(':id',$resultat['Id']);
    $sth3->execute();



} catch (PDOException $e) {
    echo 'Impossible de traiter les données. Erreur : ' . $e->getMessage();
}

?>