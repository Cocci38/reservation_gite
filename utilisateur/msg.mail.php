<?php
require 'initialisation.php';


/* Si un email est renseigné dans la table*/

if (!empty($_GET['email'])) 
	{
		$mail = $_GET['email'];}

        else
{

    $sth = $conn->prepare("SELECT mail FROM reservation-clients  where Id= :id");
    $sth -> bindValue (":id" , $_GET['id'] );
    $sth->execute();
    $result = $sth->fetch(); 

}
  

$to = $mail;
$subject = "Confirmation réservation";
$message = "Nous vous remercions pour votre réservation, en espérant que vous apprecierez votre séjour.";

// Pour revenir à la ligne tous les 70 caractères environ

$message = wordwrap($message, 70, "\r\n");

// Mettre un destinataire : 

$headers= "From: ibtissem.khir@gmail.com";



mail($to,$subject,$message,$headers);

?>
