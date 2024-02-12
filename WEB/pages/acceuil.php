<?php
    include '../inc/function.php';
    session_start();
    $idUser=$_SESSION['idUser'];
    $statut=getStatutPersonne($idUser);
?>
<div id="ensemble">
    <h1>Bonjour <?php if($statut==0){
                            echo "Admin";  
                        }
                        else{
                            echo "User";
                        }
                ?></h1>

</div>