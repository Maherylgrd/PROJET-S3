<?php
    include '../../inc/function.php';
    $variete=$_GET['variete'];
    $occupation=$_GET['occupation'];
    $rendement=$_GET['rendement'];
    if ($variete==null || $occupation==null || $rendement==null) {
        header('Location:gestionThe.php');
    }

    else{ 
        insertthe($variete,$occupation,$rendement);
        header('Location:../template.php?page=acceuil');
    }
?>