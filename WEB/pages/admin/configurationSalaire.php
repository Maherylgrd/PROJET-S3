<?php
//include('../inc/function.php');
$tabSal=getAllSalaire();

?>
<div id="ensemble">
    <div id="formulaire">
        <h2>Insertion Salaire Cueilleur </h2>
        <form action="admin/traitementSalaire.php" method="get">
        
        <div class="mb-4">
            <label for="idCeuilleur" class="form-label">id Ceuilleur</label>
            <input type="number" class="form-control" id="idCeuilleur" name="idCeuilleur">
        </div>

        <div class="mb-4">
            <label for="montant" class="form-label">Montant</label>
            <input type="number" class="form-control" id="montant" name="montant">
        </div>



        <div class="mb-4">
            <input type="submit" class="btn form-control" value="valider">
        </div>
            
        </form>
    </div>

    <div id="tableau">
        <h2>Tableau Gestion Salaire des Ceuilleurs</h2>
        <table class="table table-hover">
            <tr>
                <th>id Salaire</th>
                <th>id Ceuilleur</th>
                <th>Montant</th>

            </tr>

            <?php for( $i=0;$i<count($tabSal);$i++){
            ?>
            <tr>

                <td><?php echo $tabSal[$i]['idsalaire'] ?></td>
                <td><?php echo $tabSal[$i]['idceuilleur'] ?></td>
                <td><?php echo $tabSal[$i]['montant'] ?></td>
                
            </tr>
       <?php } ?>
        </table>

    </div>
</div>
