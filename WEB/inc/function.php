<?php
require('connection.php');

function Login($mail,$mdp)  {
    $requette1="SELECT * FROM user WHERE email like '%s' ";
    $requette1=sprintf($requette1,$mail);
    //echo $requette1;
    $resultat1=mysqli_query(dbconnect(),$requette1);
    $nb=mysqli_num_rows($resultat1);	
    //mysqli_free_result($resultat1);
    if ($nb==0) {
        return -1;
    }
    $requette="SELECT * FROM user WHERE email like '%s' AND mdp like sha1('%s') "; 
    $requette=sprintf($requette,$mail,$mdp);
    $resultat=mysqli_query(dbconnect(),$requette);
    $n=mysqli_num_rows($resultat);	
    if($n==0){
        return -2;
    }
    while ($valiny=mysqli_fetch_assoc($resultat)) {
        $retour=$valiny['iduser'];
        return $retour;
    }
}
function insertthe($variete, $occupation, $rendement) {
    $requette = "INSERT INTO the VALUES (NULL, '%s', '%s', %s)";
    $requette = sprintf($requette, $variete, $occupation, $rendement);
    $result = mysqli_query(dbconnect(), $requette);
    if ($result) {
        echo "Insertion dans 'the' réussie.";
    } else {
        echo "Erreur lors de l'insertion dans 'the': " . mysqli_error(dbconnect());
    }
}

function insertparcelle($surface, $idthe) {
    $requette = "INSERT INTO parcelle VALUES (NULL, '%s', '%s')";
    $requette = sprintf($requette, $surface, $idthe);
    $result = mysqli_query(dbconnect(), $requette);
    if ($result) {
        echo "Insertion dans 'parcelle' réussie.";
    } else {
        echo "Erreur lors de l'insertion dans 'parcelle': " . mysqli_error(dbconnect());
    }
}

/*function insertcueilleur($nom, $genre, $datenaissance) {
    $requette = "INSERT INTO cueilleur VALUES (NULL, '%s', '%s', '%s')";
    $requette = sprintf($requette, $nom, $genre, $datenaissance);
    $result = mysqli_query(dbconnect(), $requette);
    if ($result) {
        echo "Insertion dans 'cueilleur' réussie.";
    } else {
        echo "Erreur lors de l'insertion dans 'cueilleur': " . mysqli_error(dbconnect());
    }
}*/
function insertcueilleur($nom, $genre, $datenaissance) {
    // Convertir la date de naissance au format MySQL 'YYYY-MM-DD'
    $datenaissanceFormatted = date('Y-m-d', strtotime($datenaissance));

    // Préparer la requête
    $query = "INSERT INTO cueilleur VALUES (NULL, ?, ?, ?)";
    $stmt = mysqli_prepare(dbconnect(), $query);

    // Liaison des paramètres et exécution de la requête
    mysqli_stmt_bind_param($stmt, "sss", $nom, $genre, $datenaissanceFormatted);
    $result = mysqli_stmt_execute($stmt);

    if ($result) {
        echo "Insertion dans 'cueilleur' réussie.";
    } else {
        echo "Erreur lors de l'insertion dans 'cueilleur': " . mysqli_error(dbconnect());
    }
}



function insertcategoriedepense($motif) {
    $requette = "INSERT INTO categoriedepense VALUES (NULL, '%s')";
    $requette = sprintf($requette, $motif);
    $result = mysqli_query(dbconnect(), $requette);
    if ($result) {
        echo "Insertion dans 'categoriedepense' réussie.";
    } else {
        echo "Erreur lors de l'insertion dans 'categoriedepense': " . mysqli_error(dbconnect());
    }
}


function insertsalaire($idcueilleur, $montant) {
    $requette = "INSERT INTO salaire VALUES (NULL, %d, %.2f)";
    $requette = sprintf($requette, $idcueilleur, $montant);
    $result = mysqli_query(dbconnect(), $requette);
    if ($result) {
        echo "Insertion dans 'salaire' réussie.";
    } else {
        echo "Erreur lors de l'insertion dans 'salaire': " . mysqli_error(dbconnect());
    }
}

/*function insertcueillette($datecueillette, $idcueilleur, $idparcelle, $poids) {
    $requette = "INSERT INTO cueillette VALUES (NULL, '%s', %d, %d, %.2f)";
    $requette = sprintf($requette, $datecueillette, $idcueilleur, $idparcelle, $poids);
    $result = mysqli_query(dbconnect(), $requette);
    if ($result) {
        echo "Insertion dans 'cueillette' réussie.";
    } else {
        echo "Erreur lors de l'insertion dans 'cueillette': " . mysqli_error(dbconnect());
    }
}*/
function insertcueillette($datecueillette, $idcueilleur, $idparcelle, $poids) {
    $datecueilletteFormatted = date('Y-m-d H:i:s', strtotime($datecueillette));

    $requette = "INSERT INTO cueillette VALUES (NULL, '%s', %d, %d, %.2f)";
    $requette = sprintf($requette, $datecueilletteFormatted, $idcueilleur, $idparcelle, $poids);
    $result = mysqli_query(dbconnect(), $requette);

    
}


function insertdepense($idcategoriedepense, $montant,$datedepense) {
    $datedepenseformatted=date('Y-m-d H:i:s', strtotime($datedepense));
    $requette = "INSERT INTO depense VALUES (NULL, %d, %d, %.2f)";
    $requette = sprintf($requette, $idcategoriedepense,$datedepenseformatted,$montant);
    $result = mysqli_query(dbconnect(), $requette);
    if ($result) {
        echo "Insertion dans 'depense' réussie.";
    } else {
        echo "Erreur lors de l'insertion dans 'depense': " . mysqli_error(dbconnect());
    }
}

function insertresultat($poidtotalcueillette, $poidrestantparcelle, $coutrevient) {
    $requette = "INSERT INTO resultat VALUES (NULL, %.2f, %.2f, %.2f)";
    $requette = sprintf($requette, $poidtotalcueillette, $poidrestantparcelle, $coutrevient);
    $result = mysqli_query(dbconnect(), $requette);
    if ($result) {
        echo "Insertion dans 'resultat' réussie.";
    } else {
        echo "Erreur lors de l'insertion dans 'resultat': " . mysqli_error(dbconnect());
    }
}

function getStatutPersonne($id){
    $requette1="SELECT * FROM user WHERE iduser='%s' ";
    $requette1=sprintf($id);
    $resultat1=mysqli_query(dbconnect(),$requette1);
    $nb=mysqli_num_rows($resultat1);	
    mysqli_free_result($resultat1);
    if ($nb==0) {
        return -1;
    }
    while ($valiny=mysqli_fetch_assoc($resultat1)) {
        $retour=$valiny['statut'];
        return $retour;
    }   
}
function getAllThe() {
    $db = dbconnect(); 
    $query = "SELECT * FROM the";
    $result = mysqli_query($db, $query);
    $data = array(); 
    if ($result && mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }
    }
    mysqli_close($db);
    return $data;
}

function getAllParcelle() {
    $db = dbconnect(); 
    $query = "SELECT * FROM parcelle";
    $result = mysqli_query($db, $query);
    $data = array(); 
    if ($result && mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }
    }
    mysqli_close($db);
    return $data;
}
function getAllCueilleur() {
    $db = dbconnect(); 
    $query = "SELECT * FROM cueilleur";
    $result = mysqli_query($db, $query);
    $data = array(); 
    if ($result && mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }
    }
    mysqli_close($db);
    return $data;
}
function getAllCategorieDepense() {
    $db = dbconnect(); 
    $query = "SELECT * FROM categoriedepense";
    $result = mysqli_query($db, $query);
    $data = array(); 
    if ($result && mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }
    }
    mysqli_close($db);
    return $data;
}
function getAllSalaire() {
    $db = dbconnect(); 
    $query = "SELECT * FROM salaire";
    $result = mysqli_query($db, $query);
    $data = array(); 
    if ($result && mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }
    }
    mysqli_close($db);
    return $data;
}
function getAllResultat() {
    $db = dbconnect(); 
    $query = "SELECT * FROM resultat";
    $result = mysqli_query($db, $query);
    $data = array(); 
    if ($result && mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }
    }
    mysqli_close($db);
    return $data;
}
function getAllCueillette(){
    $db = dbconnect(); 
    $query = "SELECT * FROM Cueillette";
    $result = mysqli_query($db, $query);
    $data = array(); 
    if ($result && mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }
    }
    mysqli_close($db);
    return $data;
}
function getAllDepense() {
    $db = dbconnect(); 
    $query = "SELECT * FROM Depense";
    $result = mysqli_query($db, $query);
    $data = array(); 
    if ($result && mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }
    }
    mysqli_close($db);
    return $data;
}
// function getTotalPoid() {
//     $db = dbconnect(); 
//     $query = "SELECT SUM(poids) as totalPoid FROM cueillette;";
//     $result = mysqli_query($db, $query);
//     $totalPoid = 0; 

//     if ($result && mysqli_num_rows($result) > 0) {
//         while ($row = mysqli_fetch_assoc($result)) {
//             $totalPoid = $row['totalPoid'];
//         }
//     }

//     //mysqli_free_result($result);
//     //mysqli_close($db);

//     return $totalPoid; 
// }

function poids_total_parcelle_date($date_debut, $date_fin) {
    $db = dbconnect(); 
    $query = "SELECT SUM(poids) AS poids_total
              FROM cueillette";

    if ($date_debut !== null && $date_fin !== null) {
        $query .= " WHERE datecueillette BETWEEN '$date_debut' AND '$date_fin'";
    }

    $result = mysqli_query($db, $query);
    $total_weight = 0;
    
    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $total_weight = $row['poids_total'];
    }
    
    return $total_weight;
}

// function calculerPoidTotRestantParcelle() {
//     $db = dbconnect(); 

//     $query = "SELECT SUM(p.surface) AS surface_totale, IFNULL(SUM(c.poids), 0) AS poids_total
//               FROM parcelle p
//               LEFT JOIN cueillette c ON p.idparcelle = c.idparcelle";

//     $result = mysqli_query($db, $query);

//     $poidsTotalRestant = 0;

//     if ($result && mysqli_num_rows($result) > 0) {
//         $row = mysqli_fetch_assoc($result);
//         $surfaceTotale = $row['surface_totale'];
//         $poidsTotalCueillette = $row['poids_total'];

//         $poidsTotalRestant = $surfaceTotale - $poidsTotalCueillette;
//     }

//     //mysqli_free_result($result);
//     //mysqli_close($db);

//     return $poidsTotalRestant;
// }

function poids_restant_parcelle_date($date_debut, $date_fin) {
    $db = dbconnect();
    
    $query = "SELECT 
                p.surface - COALESCE(SUM(c.poids), 0) AS poids_restant
              FROM 
                parcelle p
              LEFT JOIN 
                cueillette c ON p.idparcelle = c.idparcelle";

    if ($date_debut !== null && $date_fin !== null) {
        $query .= " WHERE c.datecueillette BETWEEN '$date_debut' AND '$date_fin'";
    }
    
    $query .= " GROUP BY p.idparcelle";
    
    $result = mysqli_query($db, $query);
    $data = array();
    
    if ($result && mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row['poids_restant'];
        }
    }
    
    return $data;
}

function calculer_cout_revient_par_kg($date_debut, $date_fin) {
    $db = dbconnect();
    
    $query = "SELECT 
                SUM(d.montant) / SUM(c.poids) AS cout_revient_par_kg
              FROM 
                depense d
              LEFT JOIN 
                cueillette c ON d.datedepense = c.datecueillette
              WHERE 
                d.datedepense BETWEEN ? AND ?";
    
    $stmt = mysqli_prepare($db, $query);
    mysqli_stmt_bind_param($stmt, "ss", $date_debut, $date_fin);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    
    $cout_revient_par_kg = 0;
    
    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $cout_revient_par_kg = $row['cout_revient_par_kg'];
    }
    
    mysqli_stmt_close($stmt);
    return $cout_revient_par_kg;
}
function insertPrixThe($variete, $prixthe) {
    $query = "INSERT INTO prixthe (variete, prixthe) VALUES ('%s', %.2f)";
    $query = sprintf($query, $variete, $prixthe);
    $result = mysqli_query(dbconnect(), $query);

    if ($result) {
        echo "Insertion into 'prixthe' successful.";
    } else {
        echo "Error inserting into 'prixthe': " . mysqli_error(dbconnect());
    }
}


function selectAllPrixthe() {
    $db = dbconnect(); 
    $query = "SELECT * FROM prixthe";
    $result = mysqli_query($db, $query);
    $data = array(); 
    if ($result && mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }
        mysqli_free_result($result);
    }
    return $data;
}

function insertPaiement($datecueillette, $nom, $poidcueilli, $bonus, $malus, $paiement) {
    $query = "INSERT INTO paiement (datecueillette, nom, poidcueilli, bonus, mallus, paiement) VALUES ('%s', '%s', %.2f, %.2f, %.2f, %.2f)";
    $query = sprintf($query, $datecueillette, $nom, $poidcueilli, $bonus, $malus, $paiement);
    $result = mysqli_query(dbconnect(), $query);
    if ($result) {
        echo "Insertion into 'paiement' successful.";
    } else {
        echo "Error inserting into 'paiement': " . mysqli_error(dbconnect());
    }
}
function selectPoidsCueillette($dateDebut, $dateFin, $idCueilleteur) {
    $query = "SELECT poids FROM cueillette WHERE datecueillette BETWEEN '%s' AND '%s' AND idceuilleur = %d";
    $query = sprintf($query, $dateDebut, $dateFin, $idCueilleteur);
    $result = mysqli_query(dbconnect(), $query);
    $data = array();
    if ($result && mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row['poids'];
        }
        mysqli_free_result($result);
    }
    return $data;
}

function selectRemuneration($id) {
    $query = "SELECT * FROM remuneration WHERE idceuilleur = $id";
    $result = mysqli_query(dbconnect(), $query);
    $data = array();
    if ($result && mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }
        mysqli_free_result($result);
    }
    return $data;
}

function insertRemuneration($idCueilleur, $poidsMinimum, $bonus, $malus) {
    $query = "INSERT INTO remuneration (idcueilleur, poidminimum, bonus, malus) VALUES (%d, %.2f, %.2f, %.2f)";
    $query = sprintf($query, $idCueilleur, $poidsMinimum, $bonus, $malus);
    $result = mysqli_query(dbconnect(), $query);
    if ($result) {
        echo "Insertion into 'remuneration' successful.";
    } else {
        echo "Error inserting into 'remuneration': " . mysqli_error(dbconnect());
    }
}

function selectNomCueilleur($idCueilleur) {
    $query = "SELECT nom FROM cueilleur WHERE idcueilleur = $idCueilleur";
    $result = mysqli_query(dbconnect(), $query);
    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $nom = $row['nom'];
        mysqli_free_result($result);
        return $nom;
    } else {
        return "Cueilleur non trouvé";
    }
}


function calculatePayment($dateDebut, $dateFin, $idCueilleur) {
    $remuneration = selectRemuneration($idCueilleur);
    if (empty($remuneration)) {
        echo "Aucune donnée de rémunération trouvée pour le cueilleur avec l'ID : $idCueilleur";
        return;
    }
    $poidsCueillette = selectPoidsCueillette($dateDebut, $dateFin, $idCueilleur);
    $paiementTotal = 0;
    $nombreJours = count($poidsCueillette);
    $poidsMinimum = $remuneration[0]['poidminimum'];
    $salaire = $remuneration[0]['montant'];
    $bonus = $remuneration[0]['bonus'];
    $malus = $remuneration[0]['malus'];
    for ($i = 0; $i < $nombreJours; $i++) {
        if ($poidsCueillette[$i] < $poidsMinimum) {
            $paiement = $salaire - ($salaire * $malus / 100);
        } else {
            $paiement = $salaire + ($salaire * $bonus / 100);
        }
        $paiementTotal += $paiement;
    }
    $paiementTotal = max(0, $paiementTotal);
    $datePaiement = date("Y-m-d");
    $nom = selectNomCueilleur($idCueilleur);
    insertPaiement($datePaiement, $nom, $poidsCueillette, $bonus, $malus, $paiementTotal);
}



?>
