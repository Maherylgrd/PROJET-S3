<?php 
    include '../../inc/function.php';
    $nom=$_GET['nom'];
    $genre=$_GET['genre'];
    $dtn=$_GET['dtn'];

    insertcueilleur($nom,$genre,$dtn);
    header('Location:../acceuil.php');
?>