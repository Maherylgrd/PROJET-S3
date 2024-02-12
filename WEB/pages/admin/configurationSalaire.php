<div id="ensemble">
    <div id="formulaire">
        <h2>Insertion Salaire des Ceuilleur </h2>
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
