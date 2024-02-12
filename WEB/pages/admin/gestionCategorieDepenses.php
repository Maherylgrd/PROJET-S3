<?php 
    include('../inc/function.php');
    $tabdepense=getAllCategorieDepense();
?>
<div id="ensemble">
    <div id="formulaire">
        <h2>Insertion Categorie Depenses </h2>
        <form action="admin/traitementDepenses.php" method="get">
        
        <div class="mb-4">
            <label for="categorieDepense" class="form-label">Motif depense</label>
            <input type="text" class="form-control" id="categorieDepense" name="categorieDepense">
        </div>


        <div class="mb-4">
            <input type="submit" class="btn form-control" value="valider">
        </div>
            
        </form>
    </div>

    <div id="tableau">
        <h2>Tableau Gestion Categorie depenses</h2>
        <table class="table table-hover">
            <tr>
                <th>id Categorie Depense</th>
                <th>Motif</th>
            </tr>

            <tr>
                <td></td>
                <td></td>
            </tr>
        </table>

    </div>
</div>
