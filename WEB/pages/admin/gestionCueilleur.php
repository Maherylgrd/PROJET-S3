<?php
//include('../inc/function.php');
$tabCueilleur=getAllCueilleur();
?>
<div id="ensemble">
    <div id="formulaire">
        <h2>Insertion Cuilleur</h2>
        <form action="admin/traitementCueilleur.php" method="get">
        
        <div class="mb-4">
            <label for="surface" class="form-label">Nom </label>
            <input type="text" class="form-control" id="surface" name="nom">
        </div>

        <div class="mb-4">
            <label for="idthe" class="form-label">Genre </label>
            <!-- <input type="text" class="form-control" id="variete" name="genre"> -->
            <select name="genre" id="variete" class="form-control">
                <option value="homme">Homme</option>
                <option value="femme">Femme</option>
            </select>
        </div>

        <div class="mb-4">
            <label for="idthe" class="form-label">Date de Naissance </label>
            <input type="date" class="form-control" id="variete" name="dtn">
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
                <th>Id Cueilleur</th>
                <th>Nom</th>
                <th>Genre</th>
                <th>Date De Naissance</th>
            </tr>

            <?php for( $i=0;$i<count($tabCueilleur);$i++){
            ?>
            <tr>

                <td><?php echo $tabCueilleur[$i]['idcueilleur'] ?></td>
                <td><?php echo $tabCueilleur[$i]['nom'] ?></td>
                <td><?php echo $tabCueilleur[$i]['genre'] ?></td>
                <td><?php echo $tabCueilleur[$i]['datenaissance'] ?></td>
            </tr>
       <?php } ?>
        </table>

    </div>
</div>
