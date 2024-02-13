<?php
  include('../inc/function.php');
  $remuneration=selectRemuneration($id);
  ?>
<div id="ensemble">
    <div id="formulaire">
        <h2>Configuration minimale ...</h2>
    <form action="admin/traitementConfiguration.php">
        <div class="mt-4">
                    <div class="col-md-12">
                        <label>Id cueilleur</label>
                    </div>
                    <div class="col-md-12 mt-3">
                      <input type="number" id="disabledTextInput" class="form-control " name="idcueilleur" >
                    </div>
                    <div class="col-md-12">
                        <label>poids minimal Journalier</label>
                    </div>
                    <div class="col-md-12 mt-3">
                      <input type="number" id="disabledTextInput" class="form-control " name="pmj" >
                    </div>
                </div>
                <div class="mt-4">
                  <div class="col-md-12">
                      <label>Bonus</label>
                  </div>
                  <div class="col-md-12 mt-3">
                      <input type="number" id="disabledTextInput" class="form-control " name="bonus" >
                    </div>
                </div>
                <div class="mt-4">
                  <div class="col-md-12">
                      <label>Malus</label>
                  </div>
                  <div class="col-md-12 mt-3">
                      <input type="number" id="disabledTextInput" class="form-control " name="malus" >
                    </div>
                </div>
                
                <div class="  mt-4 ">
                  <button type="submit" class="btn btn-primary w-100">Valider</button>
                </div>
                      
    </div>
    </form>
</div>
<div id="tableau">
        <h2>Tableau remuneration</h2>
        <table class="table table-hover">
            <tr>
                <th>id Mois</th>
            </tr>
            <?php for( $i=0;$i<count($tabidmois);$i++){
            ?>
            <tr>
            <td><?php echo $tabidmois[$i]['idmois'] ?></td>
                
            </tr>
            <?php } ?>
        </table>

    </div>
</div>
