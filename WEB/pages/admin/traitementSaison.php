<?php
 include '../../inc/function.php';
$casesCochées = array();


if ($_SERVER["REQUEST_METHOD"] == "GET") {
    
    if (!empty($_GET)) {
        
        foreach ($_GET as $key => $value) { 
          
            if (!empty($value)) {
                
                $casesCochées[] = $key;
            }
        }
        insertSaisonALL($casesCochées);
        header('Location:../template.php?page=admin/gestionSaison');
    } else {
       
        echo "Aucune case cochée.";
    }
}

?>
