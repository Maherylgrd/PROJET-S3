<?php
include '../../inc/function.php';
$dtDebut=$_GET["dateDebut"];
$dtFin=$_GET["dateFin"];

if ($dtDebut=="" || $dtFin=="") {
    header('Location:listePaiementCueilleurs.php');
}
else{
    $tableCueilleur=getAllCueilleur();
    for ($i=0; $i <count($tableCueilleur) ; $i++) { 
        calculatePayment($dtDebut,$dtFin,$tableCueilleur[$i]['idcueilleur']);
    }    
    
    header('Location:../template.php?page=users/listePaiementsCueilleurs&statut=4');
}


?>