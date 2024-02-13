<?php
//include('../inc/function.php');
$tabParcelle=getAllParcelle();
?>
<div id="ensemble">
    <div id="formulaire">
        <h2>Insertion Parcelles</h2>
        <form action="admin/traitementParcelles.php" method="get">
        
        <div class="mb-4">
            <label for="surface" class="form-label">Surface en hectare</label>
            <input type="number" class="form-control" id="surface" name="surface">
        </div>

        <div class="mb-4">
            <label for="idthe" class="form-label">ID du The</label>
            <input type="text" class="form-control" id="idthe" name="idthe">
        </div>

        

        <div class="mb-4">
            <input type="submit" class="btn form-control" value="valider">
        </div>
            
        </form>
    </div>

    <div id="tableau">
        <h2>Tableau Gestion Parcelles</h2>
        <table class="table table-hover">
            <tr>
                <th>Id parcelle</th>
                <th>Surface en hectare</th>
                <th>Id de The</th>
            </tr>

            <?php for( $i=0;$i<count($tabParcelle);$i++){
            ?>
            <tr>

                <td><?php echo $tabParcelle[$i]['idparcelle'] ?></td>
                <td><?php echo $tabParcelle[$i]['surface'] ?></td>
                <td><?php echo $tabParcelle[$i]['idthe'] ?></td>
                            </tr>
       <?php } ?>
        </table>

    </div>
</div>