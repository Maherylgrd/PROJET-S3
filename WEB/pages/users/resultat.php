<?php 
include('../inc/function.php');
$totalPoid=getTotalPoid();
$totalRestantParcelle=calculerPoidTotRestantParcelle();
?>
<div id="ensemble" class="row">
    <h1>Resultats</h1>
<<<<<<< HEAD

<div id="form">
    <form class="form-inline">
    <div class="row">
            <div class=" form-group col-lg-4 col-md-4 col-sm-8 col-xs-10">
                <label for="dateDebut" >Date debut</label>
                <input type="date" class="form-control" id="dateDebut" name="dateDebut">
            </div>
            <div class="form-group col-lg-4 col-md-4 col-sm-8 col-xs-10">
                <label for="dateFin" >Date fin</label>
                <input type="date" class="form-control" id="dateFin" name="dateFin">
            </div>
            <div class="form-group col-lg-4 col-md-4 col-sm-8 col-xs-10">
                <input type="submit" class="form-control" value="chercher" >
=======
<div class="col-lg-4">
        <!-- Yearly Breakup -->
    <div class="card overflow-hidden">
        <div class="card-body p-4">
            <h5 class="card-title mb-9 fw-semibold">Poids Total Cueillettes</h5>
            <div class="row align-items-center">
                <div class="col-8">
                    <h4 class="fw-semibold mb-3"><?php echo $totalPoid ?> tonnes</h4>
                </div>
>>>>>>> e8564012cf5b07e600a178509482fb6b1297986f
            </div>
        </div>
    </form>
</div>

<<<<<<< HEAD
<div id="nombres" class="row"> 
    <div class="col-lg-4">
            <!-- Yearly Breakup -->
        <div class="card overflow-hidden">
            <div class="card-body p-4">
                <h5 class="card-title mb-9 fw-semibold">Poids Total Cueillettes</h5>
                <div class="row align-items-center">
                    <div class="col-8">
                        <h4 class="fw-semibold mb-3">892005 tonnes</h4>
=======
<div class="col-lg-4">
        <!-- Yearly Breakup -->
    <div class="card overflow-hidden">
        <div class="card-body p-4">
            <h5 class="card-title mb-9 fw-semibold">Poids restant sur les parcelles</h5>
            <div class="row align-items-center">
                <div class="col-8">
                    <h4 class="fw-semibold mb-3"><?php echo  $totalRestantParcelle?> tonnes</h4>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-lg-4">
        <!-- Yearly Breakup -->
    <div class="card overflow-hidden">
        <div class="card-body p-4">
            <h5 class="card-title mb-9 fw-semibold">Cout de revient par kg</h5>
            <div class="row align-items-center">
                <div class="col-8">
                    <h4 class="fw-semibold mb-3">28000MGA</h4>
                </div>
                <div class="col-4">
                    <div class="d-flex justify-content-end">
                        <div
                        class="text-white bg-secondary rounded-circle p-6 d-flex align-items-center justify-content-center">
                        <i class="ti ti-currency-dollar fs-6"></i>
                        </div>
>>>>>>> e8564012cf5b07e600a178509482fb6b1297986f
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-4">
            <!-- Yearly Breakup -->
        <div class="card overflow-hidden">
            <div class="card-body p-4">
                <h5 class="card-title mb-9 fw-semibold">Poids restant sur les parcelles</h5>
                <div class="row align-items-center">
                    <div class="col-8">
                        <h4 class="fw-semibold mb-3">4554 tonnes</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-4">
            <!-- Yearly Breakup -->
        <div class="card overflow-hidden">
            <div class="card-body p-4">
                <h5 class="card-title mb-9 fw-semibold">Cout de revient par kg</h5>
                <div class="row align-items-center">
                    <div class="col-8">
                        <h4 class="fw-semibold mb-3">28000MGA</h4>
                    </div>
                    <div class="col-4">
                        <div class="d-flex justify-content-end">
                            <div
                            class="text-white bg-secondary rounded-circle p-6 d-flex align-items-center justify-content-center">
                            <i class="ti ti-currency-dollar fs-6"></i>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

</div>

</div>