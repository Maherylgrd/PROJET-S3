<?php 
    include '../../inc/function.php';
    $categorieDepense=$_GET['categorieDepense'];
    $
    if ($categorieDepense==null ) {
        header('Location:configurationSalaire.php');
    }
    else{
        insertcategoriedepense($categorieDepense);
        header('Location:../template.php?page=acceuil');
    }
    
?>