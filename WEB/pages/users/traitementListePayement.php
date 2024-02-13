<?php
include '../../inc/function.php';
$dtDebut=$_GET["dateDebut"];
$dtFin=$_GET["dateFin"];
$tableCueilleur=getAllCueilleur();

calculatePayment($dtDebut,$dtFin,1);
//for ($i=0; $i <count($tableCueilleur) ; $i++) { 

//}
?>