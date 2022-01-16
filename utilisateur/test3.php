<?php


try {
    require '../Administrateur\initialisation.php';
function recherche($conn) {
    $lieux = $_POST['Emplacement_geographique'];
    $voyageur = $_POST['Nombre_de_couchages'];
    $disponibilite = $_POST['Disponibilite'];

    $sql = "SELECT Emplacement_geographique, Nombre_de_couchages, Disponibilite FROM Hebergements";

    if(! empty($lieux)) {
        $_POST[] = "Emplacement_geographique='$lieux'";
    }
    if(! empty($voyageur)) {
        $_POST[] = "Nombre_de_couchages='$voyageur'";
    }
    if(! empty($disponibilite)) {
        $_POST[] = "Disponibilite='$disponibilite'";
    }

    $sth = $conn->prepare(
        $sql);
        $sth-> execute();
    $result = $sth->fetchAll(PDO::FETCH_ASSOC);


    if (isset($result)) {
        echo "Intitulé : " .$result ['Intitule'];
        echo " Catégorie : " . $result ['Id_categorie'];
        echo " Description : " . $result ['Description'];
        echo " Photo : "  . '<img src= "../images/'. $result ['Photo']. '" alt="photo hébergement">';
        echo " Nbr de couchages : " . $result ['Nombre_de_couchages'];
        echo " Nbr de salles de bains : " . $result ['Nombre_de_salles_de_bain'];
        echo " Emplacement : " . $result ['Emplacement_geographique'];
        echo " Prix : " . $result ['Prix'];

}
}
} catch (PDOException $e) {
    echo 'Impossible de traiter les données. Erreur : ' . $e->getMessage();
}
?>