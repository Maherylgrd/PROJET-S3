<?php
    include '../../inc/function.php';
    $variete=$_GET['variete'];
    $occupation=$_GET['occupation'];
    $rendement=$_GET['rendement'];

    insertthe($variete,$occupation,$rendement);
    header('Location:../acceuil.php');
?>