
<?php
$tabMois = array(
    "janvier", "fevrier", "mars", "avril", "mai", "juin",
    "juillet", "aout", "septembre", "octobre", "novembre", "decembre"
);
?>
?>
<div id="ensemble">
    <div id="formulaire">
        <h2>Insertion Saison</h2>
        <form action="admin/traitementCueilleur.php?<?php echo http_build_query(['tabmois' => $tabMois]) ?>" method="get">
        <div class=" col-md-12 mb-4">
        <?php 
            for ($i=0; $i <count($tabMois) ; $i++) { 
                ?>
                
                    <div class="col-md-3">
                        <input type="checkbox" name="<?php echo count($tabMois)+1; ?>"> <label > <?php echo $tabMois[$i] ?></label>
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
