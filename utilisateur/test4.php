<?php
require '../Administrateur\initialisation.php';


$hebergement = $conn->query("SELECT * FROM Hebergements");
if(isset($_GET['recherche']) && !empty($_GET['recherche'])){
    $recherche = htmlspecialchars($_GET['recherche']);

    $hebergement = $conn->query('SELECT Emplacement_geographique FROM Hebergements WHERE Emplacement_geographique LIKE "%'.$recherche.'%"');
}
if($hebergement->rowCount()>0){
    while($result = $hebergement->fetch()){
        $result['Emplacement_geographique'];
}
}

?>