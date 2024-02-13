<?php
require('connection.php');

function LoginE($mail,$mdp)  {
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
    $requete = "SELECT * FROM user WHERE iduser='%s'";
    $requete = sprintf($requete, $id);

    $resultat = mysqli_query(dbconnect(), $requete);

    if (!$resultat) {
        echo "Error in query: " . mysqli_error(dbconnect());
        return -1;
    }

    $nb = mysqli_num_rows($resultat);

    if ($nb == 0) {
        return -1;
    }

    while ($valiny = mysqli_fetch_assoc($resultat)) {
        $retour = $valiny['statut'];
    }

    //mysqli_free_result($resultat);

    return $retour;
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
    //mysqli_close($db);
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
    //mysqli_close($db);
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
    //mysqli_close($db);
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
    //mysqli_close($db);
    return $data;
}

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



function poids_restant_parcelle_dateOLD($date_debut, $date_fin) {
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

function calculer_cout_revient_par_kgOLD($date_debut, $date_fin) {
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
       // mysqli_free_result($result);
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
    $query = "SELECT * FROM remuneration WHERE idcueilleur = $id";
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

function selectSalaireById($idsalaire) {
    $query = "SELECT * FROM salaire WHERE idceuilleur = %d";
    $query = sprintf($query, $idsalaire);

    $result = mysqli_query(dbconnect(), $query);

    if ($result) {
        $row = mysqli_fetch_assoc($result);
        return $row;
    } else {
        echo "Error selecting from 'salaire': " . mysqli_error(dbconnect());
        return null;
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
    $salaireALL = selectSalaireById($idCueilleur);
    $salaire=$salaireALL['montant'];
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



function insertSaisonALL($tabidmois){
    $db = dbconnect();
    $query = "DELETE FROM saison";
    $result0 = mysqli_query($db, $query);
    if ($result0) {
        for ($i = 0; $i < count($tabidmois); $i++) {  // Correction de la condition de la boucle for
            $query2 = "INSERT INTO saison (idmois) VALUES (" . $tabidmois[$i] . ")";
            $result = mysqli_query($db, $query2);
            if (!$result) {
                echo "Erreur lors de l'insertion : " . mysqli_error($db);
                // Vous pouvez choisir de sortir de la boucle ici si vous le souhaitez
            }
        }
    } else {
        echo "Erreur lors de la suppression des saisons : " . mysqli_error($db);
    }

 
}

function deleteSaison($idMois) {
    $query = "DELETE FROM saison WHERE idmois = %d";
    $query = sprintf($query, $idMois);
    $result = mysqli_query(dbconnect(), $query);
    if ($result) {
        echo "Deletion from 'saison' successful.";
    } else {
        echo "Error deleting from 'saison': " . mysqli_error(dbconnect());
    }
}

function deleteSaisonAll() {
    $query = "DELETE FROM saison";
    $result = mysqli_query(dbconnect(), $query);
    if ($result) {
        echo "All records deleted from 'saison'.";
    } else {
        echo "Error deleting from 'saison': " . mysqli_error(dbconnect());
    }
}

/*function insertSaison($idMois) {
    $query = "INSERT INTO saison (idmois) VALUES (%d)";
    $query = sprintf($query, $idMois);
    $result = mysqli_query(dbconnect(), $query);
    if ($result) {
        echo "Insertion into 'saison' successful.";
    } else {
        echo "Error inserting into 'saison': " . mysqli_error(dbconnect());
    }
}*/

function selectAllSaison() {
    $db = dbconnect(); 
    $query = "SELECT * FROM saison";
    $result = mysqli_query($db, $query);
    $data = array(); 
    if ($result && mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }
        mysqli_free_result($result);
        return $data;
    } else {
        echo "Error selecting from 'saison': " . mysqli_error($db);
        return [];
    }
}

function insertdeletesaison($tab){
    deleteSaisonAll();

    foreach($tab as $idMois) {
        insertSaison($idMois);
    }
}    

function deletePaiment() {
    $query = "DELETE FROM paiement";
    $result = mysqli_query(dbconnect(), $query);

    if ($result) {
        echo "Deletion from 'paiement' successful.";
    } else {
        echo "Error deleting from 'paiement': " . mysqli_error(dbconnect());
    }
}



function getAllPaiement() {
    $query = "SELECT * FROM paiement";
    $result = mysqli_query(dbconnect(), $query);

    if (!$result) {
        echo "Error in query: " . mysqli_error(dbconnect());
        return null;
    }

    $paiements = array();

    while ($row = mysqli_fetch_assoc($result)) {
        $paiements[] = $row;
    }

   // mysqli_free_result($result);

    return $paiements;
}


//RESULTAT  



function poids_restant_parcelle_date($min, $max) {
    $db = dbconnect();

    
    $query = "SELECT 
    SUM((th.rendement * p.surface * 10000 / th.occupation)) - COALESCE(SUM(c.poids), 0) AS poids_restant
    FROM 
        parcelle p
    JOIN 
        the th ON p.idthe = th.idthe
    LEFT JOIN 
        cueillette c ON p.idparcelle = c.idparcelle
    WHERE 
        c.datecueillette <= '%s'
        AND MONTH(c.datecueillette) >= (SELECT idmois FROM saison WHERE idmois <= MONTH('%s') ORDER BY idmois DESC LIMIT 1);";

    $query=sprintf($query,$max,$max);    

    echo $query;

    $result = mysqli_query($db, $query);
    $data =null;
    
    if ($result && mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $data = $row['poids_restant'];
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

function sumDep() {
    $query = "SELECT SUM(montant) AS total FROM depense ";
   
    $result = mysqli_query(dbconnect(), $query);
    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $total = $row['total'];
        mysqli_free_result($result);
        return $total;
    } else {
        return 0;
    }
}

function totalSalaireCueilleurs() {
    $db = dbconnect();

    $query = "SELECT SUM(montant) AS total_salaire
              FROM salaire
              WHERE idceuilleur IN (SELECT DISTINCT idceuilleur FROM cueillette)";

    $result = mysqli_query($db, $query);

    $totalSalaire = 0;
    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $totalSalaire = $row['total_salaire'];
    }

    return $totalSalaire;
}

function sumPoidsCueillis() {
    $db = dbconnect();

    $query = "SELECT SUM(poids) AS total_poids
              FROM cueillette";

    $result = mysqli_query($db, $query);

    $totalPoids = 0;
    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $totalPoids = $row['total_poids'];
    }

    return $totalPoids;
}




/*function TotalVentes($dateDebut, $dateFin) {
    $query = "SELECT SUM(c.poids * pt.prixthe) AS montant_total_ventes
              FROM cueillette c
              JOIN parcelle p ON c.idparcelle = p.idparcelle
              JOIN prixthe pt ON p.idthe = pt.idthe
              JOIN the t ON p.idthe = t.idthe
              WHERE c.datecueillette BETWEEN '$dateDebut' AND '$dateFin'";
    $result = mysqli_query(dbconnect(), $query);
    if ($result) {
        $row = mysqli_fetch_assoc($result);
        $totalSales = $row['montant_total_ventes'];
        mysqli_free_result($result);
        return $totalSales;
    } else {
        echo "Erreur lors de l'exécution de la requête : " . mysqli_error(dbconnect());
        return false;
    }
}*/
function calculateBenefice($dateDebut, $dateFin) {
    //$totalVentes = TotalVentes($dateDebut, $dateFin);
    //$totalDepenses = totalDepenses($dateDebut, $dateFin);
    //$benefice = 1000 - $totalDepenses;
    return 0;
}



?>

