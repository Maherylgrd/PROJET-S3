<?php 
    include '../../inc/function.php';
    $categorieDepense=$_GET['categorieDepense'];
    $
    if ($categorieDepense==null ) {
        header('Location:gestionCategoriedepenses.php');
    }
    else{
        insertcategoriedepense($categorieDepense);
        header('Location:../template.php?page=acceuil');
    }
    
?>