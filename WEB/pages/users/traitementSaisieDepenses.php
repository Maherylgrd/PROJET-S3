<?php
    include '../../inc/function.php';
    $idCategorieDepenses=$_GET['idCategorieDepenses'];
    $montant=$_GET['montant'];
    if($idCategorieDepenses==null || $montant==null){
        header('Location:saisieDepenses.php');
    }
    else{
        insertdepense($idCategorieDepenses,$montant);
        header('Location:../template.php?page=acceuil');
    }
?>