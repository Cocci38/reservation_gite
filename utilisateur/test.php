<?php

@$lien=$GET["$tab[$i]"];
if ($lien=="fiche.hebergement.php") {
    setcookie("$tab[$i]",$lien,time()+3600);
}
$lie="";



?>