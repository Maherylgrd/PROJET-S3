<div id="ensemble" class="row">
    <h1>Resultats</h1>


<div id="form">
    <form class="form-inline" action="users/traitementResultat.php" method="get">
    <div class="row">
            <div class=" form-group col-lg-4 col-md-4 col-sm-8 col-xs-10">
                <label for="dateDebut" >Date debut</label>
                <input type="date" class="form-control" id="dateDebut" name="dateDebut">
            </div>
            <div class="form-group col-lg-4 col-md-4 col-sm-8 col-xs-10">
                <label for="dateFin" >Date fin</label>
                <input type="date" class="form-control" id="dateFin" name="dateFin">
            </div>
            <div class="form-group col-lg-2 col-md-4 col-sm-8 col-xs-10" style="margin-top: 1.5em;">
                <input type="submit" class="form-control bouton" value="chercher" >
            </div>
    </div>
    </form>
</div>

<div id="tableau" style="margin :3em 0em;">
        <h2>Tableau Gestion Variete de The</h2>
        <table class="table table-hover">
            <tr>
                <th>Date</th>
                <th>Nom cueilleur</th>
                <th>Poids</th>
                <th>%bonus</th>
                <th>%mallus</th>
                <th>montant paiement</th>
            </tr>
           
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
       
        </table>

    </div>

</div>