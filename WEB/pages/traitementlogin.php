<?php 
include 'function.php'; 

$mail=$_POST['mail'];
$mdp=$_post['mdp'];
$login=login($mail,$mdp);

if($login==-1){
    header("Location:login.php");
}
if ($login==-2) {
    header("Location:login.php");
}
else{
    $_SESSION['id']=$login;
    header("Location:acceuil.php");
}
?>