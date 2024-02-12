<?php 
    include '../../inc/function.php';
    $surface=$_GET['surface'];
    $variete=$_GET['variete'];
    
    insertparcelle($surface,$variete);
    header('Location:../acceuil.php');
?>