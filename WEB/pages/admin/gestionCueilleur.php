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
            <input type="text" class="form-control" id="variete" name="genre">
        </div>

        <div class="mb-4">
            <label for="idthe" class="form-label">Date de Naissance </label>
            <input type="text" class="form-control" id="variete" name="dtn">
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
