<?php

require '../Administrateur\initialisation.php';

$result = $conn->query("SELECT * FROM Hebergements ORDER BY Intitule ASC");

while ($hebergement = $result->fetch(PDO::FETCH_OBJ)){
    ?>
    <p>
        <strong>Gites</strong> : <?= $hebergement->Intitule ?>
        <strong>Voyageur</strong> : <?= $hebergement->Nombre_de_couchages ?>
    </p>

<?php
}
$result->closeCursor();

$gite = $conn->prepare("SELECT Intitule FROM Hebergements WHERE Intitule = :Intitule");

$gite->execute([
    "Intitule" => "Chanteclair"
]);

$data = $gite->fetchAll(PDO::FETCH_ASSOC);

print_r($data);
?>