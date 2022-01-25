<?php
require '../Administrateur\initialisation.php';

var_dump($_POST);
if (isset ($_POST['envoyer'])) {
    echo "ok";}


 /*Si un email est renseigné dans la table*/

if (!empty($_POST['mail']))


		
{  var_dump($_POST['mail']);

    $mail = $_POST['mail'];
    $sth = $conn->prepare("SELECT mail FROM reservation_clients  where Id= :id");
    $sth -> bindValue (":id", $_GET['id'] );
    $sth->execute();
    $mail = $sth->fetch(); 

}

/*$to = $mail;
$subject = "Confirmation réservation";
$message = "Nous vous remercions pour votre réservation, en espérant que vous apprecierez votre séjour.";

// Pour revenir à la ligne tous les 70 caractères environ

$message = wordwrap($message, 70, "\r\n");

// Mettre un destinataire : 

$headers= "From: ibtissem.khir@gmail.com";



mail($to,$subject,$message,$headers);*/

?>
