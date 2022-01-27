<?php

require '../Administrateur\initialisation.php';

/*$sth2 = $conn->prepare("SELECT * FROM hebergements where Id= id");
$sth2 -> bindValue (":id" , $_GET['Id'] );
$sth2->execute();
$resultat = $sth2->fetch(PDO::FETCH_ASSOC);
var_dump( $_GET['Id']);*/



$arrivee = $_POST["arrivee"];
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



$sth = $conn->prepare("INSERT INTO Reservation_clients(arrivee, Id_hebergement, depart, adulte, enfant, titre, nom, prenom, adresse, code_postal, ville, pays, telephone, mail)
                    VALUES(:arrivee, :id, :depart, :adulte, :enfant, :titre, :nom, :prenom, :adresse, :code_postal, :ville, :pays, :telephone, :mail)");

    $sth->bindParam(':arrivee',$arrivee);
    $sth->bindParam(':id',$resultat);
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
        
        // Le destinataire : 
        
        $headers= "From: ibtissem.khir@gmail.com";
        
        
        mail($to,$subject,$message,$headers);
    }






}
catch (PDOException $e) {
    echo 'Impossible de traiter les données. Erreur : ' . $e->getMessage();
}

?>

