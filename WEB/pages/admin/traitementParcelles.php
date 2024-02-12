<?php 
    include '../../inc/function.php';
    $surface=$_GET['surface'];
    $idthe=$_GET['idthe'];
    if ($surface==null || $idthe==null) {
        header('Location:gestionParcelles.php');
    }
    else{
        insertparcelle($surface,$idthe);
        header('Location:../template.php?page=acceuil');
    }
    
?>