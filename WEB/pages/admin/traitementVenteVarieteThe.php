<?php
include '../../inc/function.php';
$vrt=$_GET['variete'];
$prix=$_GET['prix'];
if ($vrt=="" || $prix=="" ) {
    header('Location:prixVenteVarieteThe.php');
}
else{ 
    insertPrixthe($vrt,$prix);
    header('Location:../template.php?page=acceuil');
}
?>