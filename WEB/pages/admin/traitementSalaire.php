<?php 
    include '../../inc/function.php';
    $idCeuilleur=$_GET['idCeuilleur'];
    $montant=$_GET['montant'];
    if ($idCeuilleur==null || $montant==null) {
        header('Location:configurationSalaire.php');
    }
    else{
        insertsalaire($idCeuilleur,$montant);
        header('Location:../template.php?page=accueil');
    }
    
?>