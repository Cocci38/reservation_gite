<?php

require '../Administrateur\initialisation.php';

$arrivee = $_POST["arrivee"];
/*$Id_hebergement = $_POST["Id_hebergement"];*/
$depart = $_POST["depart"];
$adulte = $_POST["adulte"];
$enfant = $_POST["enfant"];
$titre = $_POST["titre"];
$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$adresse = $_POST["adresse"];
$code_postal = $_POST["code_postal"];
$ville = $_POST["ville"];
$pays = $_POST["pays"];
$phone = $_POST["telephone"];
$mail = $_POST["mail"];


try{
$sth = $conn->prepare("INSERT INTO Reservation_clients(arrivee, depart, adulte, enfant, titre, nom, prenom, adresse, code_postal, ville, pays, telephone, mail)
                    VALUES(:arrivee, :depart, :adulte, :enfant, :titre, :nom, :prenom, :adresse, :code_postal, :ville, :pays, :telephone, :mail)");

    $sth->bindParam(':arrivee',$arrivee);
    /*$sth->bindParam(':Id_hebergement',$Id_hebergement);*/
    $sth->bindParam(':depart',$depart);
    $sth->bindParam(':adulte',$adulte);
    $sth->bindParam(':enfant',$enfant);
    $sth->bindParam(':titre',$titre);
    $sth->bindParam(':nom',$nom);
    $sth->bindParam(':prenom',$prenom);
    $sth->bindParam(':adresse',$adresse);
    $sth->bindParam(':code_postal',$code_postal);
    $sth->bindParam(':ville',$ville);
    $sth->bindParam(':pays',$pays);
    $sth->bindParam(':telephone',$phone);
    $sth->bindParam(':mail',$mail);
    $sth->execute();

    /*header('Location: msg.mail.php');*/

    if (isset ($_POST['envoyer']) && !empty($_POST['mail'])) {

        echo "ok";
        var_dump($_POST['mail']);

        $mail = $_POST['mail'];
  
        $to = $mail;
        $subject = "Confirmation réservation";
        $message = "Nous vous remercions pour votre réservation. <br> Nous espéront que vous apprecierez votre séjour. <br> l'équipe Easy Trip ";
        
        // Pour revenir à la ligne tous les 70 caractères environ
        
        $message = wordwrap($message, 70, "\r\n");
        
        // Mettre un destinataire : 
        
        $headers= "From: ibtissem.khir@gmail.com";
        
        
        mail($to,$subject,$message,$headers);




       }






}
catch (PDOException $e) {
    echo 'Impossible de traiter les données. Erreur : ' . $e->getMessage();
}

?>

