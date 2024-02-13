<?php
    include '../../inc/function.php';
    $idCategorieDepenses=$_GET['idCategorieDepenses'];
    $montant=$_GET['montant'];
    $datedepenses=$_GET['datedepenses'];
    if($idCategorieDepenses==null || $montant==null || $datedepenses==null){
        header('Location:saisieDepenses.php');
    }
    else{
        insertdepense($idCategorieDepenses,$montant,$datedepenses);
        header('Location:../template.php?page=acceuil');
    }
?>