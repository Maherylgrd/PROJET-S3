<div id="ensemble">
    <div id="formulaire">
        <h2>Saisie des Cueillettes</h2>
        <form action="users/traitementSaisieCueillettes.php" method="get">
        
        <div class="mb-4">
            <label for="dateCeuilleur" class="form-label">Date Cueillettes</label>
            <input type="date" class="form-control" id="dateCeuilleur" name="dateCeuilleur">
        </div>

        <div class="mb-4">
            <label for="idCueilleur" class="form-label">id Cueilleur</label>
            <input type="number" class="form-control" id="idCueilleur" name="idCueilleur">
        </div>

        <div class="mb-4">
            <label for="idParcelles" class="form-label">id Parcelles</label>
            <input type="number" class="form-control" id="idParcelles" name="idParcelles">
        </div>

        <div class="mb-4">
            <label for="poids" class="form-label">Poids en kg</label>
            <input type="number" class="form-control" id="poids" name="poids">
        </div>



        <div class="mb-4">
            <input type="submit" class="btn form-control" value="valider">
        </div>
            
        </form>
    </div>

</div>
