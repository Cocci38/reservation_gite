<?php
try {
    require '../Administrateur\initialisation.php';

    $sql = "SELECT Emplacement_geographique, Nombre_de_couchages, Disponibilite FROM Hebergements
    WHERE Emplacement_geographique = '' AND Nombre_de_couchages = '' AND Disponibilite = ''";

    if ($_POST['Emplacement_geographique']) {
        $sql = "Emplacement_geographique = ':Emplacement_geographique'";
    }

    if ($_POST['Nombre_de_couchages']) {
        $sql = "Nombre_de_couchages = ':Nombre_de_couchages'";
    }

    $sql = "Disponibilite = ':Disponibilite'";

    $sth = $conn->prepare(
        $sql);

    if ($_POST['Emplacement_geographique']) {
        $sth->bindValue(':Emplacement_geographique',$_POST['Emplacement_geographique']);
    }

    if ($_POST['Nombre_de_couchages']) {
        $sth->bindValue(':Nombre_de_couchages',$_POST['Nombre_de_couchages']);
    }

    if ($_POST['Disponibilite']) {
        $sth->bindValue(':Disponibilite',$_POST['Disponibilite']);
    }

    $sth-> execute();
$resultat = $sth->fetchAll(PDO::FETCH_ASSOC);

echo '<pre>';
print_r($resultat);
echo '</pre>';

} catch (PDOException $e) {
    echo 'Impossible de traiter les données. Erreur : ' . $e->getMessage();
}
?>