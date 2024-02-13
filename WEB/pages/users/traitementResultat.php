<?php 
    include '../../inc/function.php';

    $dateDebut=$_GET['dateDebut'];
    $dateFin=$_GET['dateFin'];
    
   //1 
    $totalPoid=poids_total_parcelle_date($dateDebut,$dateFin);
    //2
    $totalRestantParcelle=poids_restant_parcelle_dateOLD($dateDebut,$dateFin);
    $totalRestantParcelleSerialized = serialize($totalRestantParcelle);
    //print_r($totalRestantParcelle);
    //3
    $montDep=sumDep($dateDebut,$dateFin);
    //4
    //$montVente=TotalVentes($dateDebut,$dateFin);
    //5
    //$benef= calculateBenefice($dateDebut, $dateFin);
    //6
    $coupderevient=calculer_cout_revient_par_kg($dateDebut,$dateFin);
    
    
    
    

    
    //header('Location:../template.php?page=users/resultat&totalPoid='.$totalPoid.'&totalRestantParcelle='.$totalRestantParcelle.'&montDep='.$montDep.'&montVente='.$montVente.'&benef='.$benef.'&coupderevient='.$coupderevient);
    header('Location:../template.php?page=users/resultat&totalPoid='.$totalPoid.'&totalRestantParcelle='.urlencode($totalRestantParcelleSerialized).'&montDep='.$montDep.'&coupderevient='.$coupderevient);
    

    
?>