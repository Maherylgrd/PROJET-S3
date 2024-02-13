
<?php
$tabMois = array(
    "janvier", "fevrier", "mars", "avril", "mai", "juin",
    "juillet", "aout", "septembre", "octobre", "novembre", "decembre"
);
?>

<div id="ensemble">
    <div id="formulaire">
        <h2>Insertion Saison</h2>
        <form action="admin/traitementSaison.php" method="get">
        <div class=" col-md-12 mb-4">
        <?php 
            for ($i=0; $i <count($tabMois) ; $i++) { 
                $idmois=$i+1;
                ?>
                
                    <div class="col-md-3">
                        <input type="checkbox" name="<?php echo $idmois; ?>"> <label > <?php echo $tabMois[$i] ?></label>
                    </div>
                    
                
        <?php    }
        ?>
        </div>
        <div class="  mt-2 ">
            <button type="submit" class="btn btn-primary w-25">Valider</button>
        </div>
                      
    </div>
    </form>
</div>

</div>
