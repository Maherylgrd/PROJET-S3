<?php
//include('../inc/function.php');
$prixdevente=selectAllPrixthe();
?>
<div id="ensemble">
    <div id="formulaire">
        <h2>Insertion Prix de Vente par Variation de Thé</h2>
        <form action="admin/traitementVenteVarieteThe.php" method="get">
        <div class="mb-4">
            <label for="variete" class="form-label">Nom variete de the</label>
            <input type="text" class="form-control" id="variete" name="variete">
        </div>

        <div class="mb-4">
            <label for="prix" class="form-label">Prix</label>
            <input type="number" class="form-control" id="prix" name="prix">
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
                <th> Prix </th>
            </tr>
           
            <tr>
                <td></td>
                <td></td>
            </tr>
       
        </table>

    </div>
</div>