<?php 
//include('../inc/function.php');
//$totalPoid = isset($_GET['totalPoid']) ? $_GET['totalPoid'] : null;
//$totalRestantParcelle = isset($_GET['totalRestantParcelle']) ? $_GET['totalRestantParcelle'] : null;
//$coutDeRevient = isset($_GET['coupderevient']) ? $_GET['coupderevient'] : null;


$totalPoid=isset($_GET['totalPoid']) ? $_GET['totalPoid'] : null;
    //2
$totalRestantParcelle=isset($_GET['totalRestantParcelle']) ? $_GET['totalRestantParcelle'] : null;
    //3
$montDep=isset($_GET['montDep']) ? $_GET['montDep'] : null;
    //4
//$montVente=isset($_GET['montVente']) ? $_GET['montVente'] : null;
    //5
$benef= isset($_GET['benef']) ? $_GET['benef'] : null;
    //6
$coupderevient=isset($_GET['coupderevient']) ? $_GET['coupderevient'] : null;
    

?>
<div id="ensemble" class="row">
    <h1>Resultats</h1>


<div id="form">
    <form class="form-inline" action="users/traitementResultat.php" method="get">
    <div class="row">
            <div class=" form-group col-lg-4 col-md-4 col-sm-8 col-xs-10">
                <label for="dateDebut" >Date debut</label>
                <input type="date" class="form-control" id="dateDebut" name="dateDebut">
            </div>
            <div class="form-group col-lg-4 col-md-4 col-sm-8 col-xs-10">
                <label for="dateFin" >Date fin</label>
                <input type="date" class="form-control" id="dateFin" name="dateFin">
            </div>
            <div class="form-group col-lg-4 col-md-4 col-sm-8 col-xs-10" style="margin-top: 1.5em;">
                <input type="submit" class="form-control bouton" value="chercher" >
            </div>
    </div>
    </form>
</div>


<div id="nombres" class="row" style="margin :3em 0em;"> 
    <div class="col-lg-4">
            <!-- Yearly Breakup -->
        <div class="card overflow-hidden">
            <div class="card-body p-4">
                <h5 class="card-title mb-9 fw-semibold">Poids Total Cueillettes</h5>
                <div class="row align-items-center">
                    <div class="col-8">
                        <h4 class="fw-semibold mb-3"><?php if ($totalPoid!=null) {
                            echo $totalPoid;
                        }  ?> tonnes</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-4">
            <!-- Yearly Breakup -->
        <div class="card overflow-hidden">
            <div class="card-body p-4">
                <h5 class="card-title mb-9 fw-semibold">Total Restant Par Parcelle</h5>
                <div class="row align-items-center">
                    <div class="col-8">
                        <h4 class="fw-semibold mb-3"><?php if ($totalRestantParcelle!=null) {
                            echo $totalRestantParcelle;
                        }  ?> tonnes</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
            <!-- Yearly Breakup -->
        <div class="card overflow-hidden">
            <div class="card-body p-4">
                <h5 class="card-title mb-9 fw-semibold">Montant des Depenses</h5>
                <div class="row align-items-center">
                    <div class="col-8">
                        <h4 class="fw-semibold mb-3"><?php if ($montDep!=null) {
                            echo $montDep;
                        }  ?> </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
            <!-- Yearly Breakup -->
        <div class="card overflow-hidden">
            <div class="card-body p-4">
                <h5 class="card-title mb-9 fw-semibold">Benefice</h5>
                <div class="row align-items-center">
                    <div class="col-8">
                        <h4 class="fw-semibold mb-3"><?php if ($benef!=null) {
                            echo $benef;
                        }  ?> </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
            <!-- Yearly Breakup -->
        <div class="card overflow-hidden">
            <div class="card-body p-4">
                <h5 class="card-title mb-9 fw-semibold">Cout revient par KG</h5>
                <div class="row align-items-center">
                    <div class="col-8">
                        <h4 class="fw-semibold mb-3"><?php if ($coupderevient!=null) {
                            echo $coupderevient;
                        }  ?> </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

    

</div>
</div>