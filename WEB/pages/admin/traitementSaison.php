<?php 
    include '../../inc/function.php';
    $tabmois=$_GET['tabmois'];
    $idmois=array();
    for ($i=0; $i <count($tabmois) ; $i++) { 
        $idmois=$_GET['$i'];
        if ($idmois==null) {
            header('Location:gestion.php');
        }
        else{
            insertSaison($idmois);
            header('Location:../template.php?page=acceuil');
        }
    }

    

   
        
    
?>