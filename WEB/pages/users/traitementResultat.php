<?php 
    include '../../inc/function.php';

    $dateDebut=$_GET['dateDebut'];
    $dateFin=$_GET['dateFin'];
    
    
    $totalPoid=poids_total_parcelle_date($dateDebut,$dateFin);
    $totalRestantParcelle=poids_restant_parcelle_date($dateDebut,$dateFin);
    $tableau=urlencode(serialize($totalRestantParcelle));
    $coupderevient=calculer_cout_revient_par_kg($dateDebut,$dateFin);
    
    

    
    header('Location:resultat.php?totalPoid='.$totalPoid.'&totalRestantParcelle='.$tableau.'&coupderevient='.$coupderevient);
    

    
?>