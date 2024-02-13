<?php 
    include '../../inc/function.php';
    $nom=$_GET['nom'];
    $genre=$_GET['genre'];
    $dtn=$_GET['dtn'];
    if ($nom==null || $genre==null || $dtn==null) {
        header('Location:gestionCueilleur.php');
    }

    else{ 
        insertcueilleur($nom,$genre,$dtn);
        header('Location:../template.php?page=admin/gestionCueilleur');
    }
?>