<?php
    include '../../inc/function.php';
    $dateCeuilleur=$_GET['dateCeuilleur'];
    $idCueilleur=$_GET['idCueilleur'];
    $idParcelles=$_GET['idParcelles'];
    $poids=$_GET['poids'];

    if ($dateCeuilleur=null || $idCueilleur=null || $idParcelles=null || $poids=null) {
        header('Location:saisieCueillettes.php');
    }
    else{
        insertcueillette($dateCeuilleur,$idCueilleur,$idParcelles,$poids);
        header('Location:../template.php?page=acceuil');
    }
?>