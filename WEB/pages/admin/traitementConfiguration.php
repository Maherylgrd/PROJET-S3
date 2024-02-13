<?php
include '../../inc/function.php';
$idcueilleur=$_GET['idcueilleur'];
$pmj=$_GET["pmj"];
$bonus=$_GET['bonus'];
$malus=$_GET['malus'];
if ($idcueilleur=="" || $pmj=="" || $bonus=="" || $malus=="") {
    header('Location:configuration.php');
}
else{ 
    insertRemuneration($idcueilleur,$pmj,$bonus,$malus);
    header('Location:../template.php?page=acceuil');
}


?>