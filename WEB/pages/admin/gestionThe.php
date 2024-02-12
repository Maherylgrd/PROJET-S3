<?php
include('../inc/function.php');

$tabThe=getAllThe();
?>
<div id="ensemble">
    <div id="formulaire">
        <h2>Insertion Variation de Thé</h2>
        <form action="traitementThe.php" method="get">
        <div class="mb-4">
            <label for="variete" class="form-label">Nom variete de the</label>
            <input type="text" class="form-control" id="variete" name="variete">
        </div>

        <div class="mb-4">
            <label for="occupation" class="form-label">Occupation</label>
            <input type="text" class="form-control" id="occupation" name="occupation">
        </div>

        <div class="mb-4">
            <label for="rendement" class="form-label">Rendement par pied</label>
            <input type="number" class="form-control" id="rendement" name="rendement">
        </div>

        <div class="mb-4">
            <input type="submit" class="btn form-control" value="valider">
        </div>
            
        </form>
    </div>

    <div id="tableau">
        <h2>Tableau Gestion Variete de The</h2>
        <table class="table table-hover">
            <tr>
                <th> Id The </th>
                <th>Nom variete the</th>
                <th>Occupation</th>
                <th>Rendement par pied</th>
            </tr>
            <?php for( $i=0;$i<count($tabThe);$i++){
            ?>
            <tr>

                <td><?php echo $tabThe[$i]['idthe'] ?></td>
                <td><?php echo $tabThe[$i]['variete'] ?></td>
                <td><?php echo $tabThe[$i]['occupation'] ?></td>
                <td><?php echo $tabThe[$i]['rendement'] ?></td>
            </tr>
       <?php } ?>
        </table>

    </div>
</div>