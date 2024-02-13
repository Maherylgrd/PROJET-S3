<?php 
    include '../../inc/function.php';
    $categorieDepense=$_GET['categorieDepense'];
    if ($categorieDepense=="" ) {
        header('Location:gestionCategoriedepenses.php');
    }
    else{
        insertcategoriedepense($categorieDepense);
        header('Location:../template.php?page=acceuil');
    }
    
?>