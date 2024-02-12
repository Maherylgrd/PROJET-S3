<div id="ensemble">
    <div id="formulaire">
        <h2>Insertion Parcelles</h2>
        <form action="traitementParcelle.php" method="get">
        
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
                <th>Numero parcelle</th>
                <th>Surface en hectare</th>
                <th>Variete de the plante</th>
            </tr>

            <tr>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </table>

    </div>
</div>