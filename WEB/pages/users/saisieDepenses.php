<div id="ensemble">
    <div id="formulaire">
        <h2>Saisie des Depenses</h2>
        <form action="users/traitementSaisieDepenses.php" method="get">
        
        <div class="mb-4">
            <label for="idCategorieDepenses" class="form-label">id Categorie Depenses</label>
            <input type="number" class="form-control" id="idCategorieDepenses" name="idCategorieDepenses">
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

</div>
