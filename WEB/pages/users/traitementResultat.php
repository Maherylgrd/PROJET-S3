<?php 
    include '../../inc/function.php';

    $dateDebut=$_GET['dateDebut'];
    $dateFin=$_GET['dateFin'];

    $totalPoid=poids_total_parcelle_date($dateDebut,$dateFin);
    $totalRestantParcelle=poids_restant_parcelle_date($dateDebut,$dateFin);
    echo $totalPoid."<br>";
    
    for ($i=0; $i <count($totalRestantParcelle) ; $i++) { 
        echo $totalRestantParcelle[$i]."<br>";        
    }
    header('Location:resultat.php?totpoid=')
?>