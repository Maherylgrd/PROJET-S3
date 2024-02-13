<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prevision</title>
    <link rel="shortcut icon" type="image/png" href="../../assets/images/logos/images.jpg" />
    <link rel="stylesheet" href="../../assets/css/file.css" />
    <!-- <link rel="stylesheet" href="../assets/css/styles.min.css" /> -->

    <link href="../../assets/css/bootstrap.min.css" rel="stylesheet">
    <script src="../../assets/js/jquery.min.js"></script>
     <script src="../../assets/js/bootstrap.min.js"></script>
     <script rel="text/javascript">
        function xhrGenerator(){
            var xhr; 
            try {  xhr = new ActiveXObject('Msxml2.XMLHTTP');   }
            catch (e) 
            {
                try {   xhr = new ActiveXObject('Microsoft.XMLHTTP'); }
                catch (e2) 
                {
                try {  xhr = new XMLHttpRequest();  }
                catch (e3) {  xhr = false;   }
                }
            }
            return xhr;
        }

        function sendForm(method, page, formulaire,synchrone){
            var xhr=xhrGenerator();
            if (!xhr){
                return{'error':'Impossible de générer xhr'};
            }
            xhr.open(method,page,synchrone);
            if(formulaire!=null){
                xhr.send(new FormData(formulaire));
            }
            else{
                xhr.send(null);
            }
            
            return xhr;
        }

        function createBoxes(retour,cle){
            var conteneur=document.getElementById("boxes");
            conteneur.innerHTML="";
            for (let i = 0; i < array.length; i++) {
                var div=document.createElement("div");
                var h3=document.createElement("h3");
                var p=document.createElement("p");

                div.appendChild(p);
                div.appendChild(h3);
                conteneur.appendChild(div);
            }
        }
     </script>
</head>
<body>
<div id="ensemble">
    <div class="page-header row" style="background-color:#fff">
        <div class="col-lg-1 col-md-1 col-sm-2 col-xs-4" style="padding: 0 2em; margin-top:-2em ;"><img src="../../assets/images/logos/images.jpg" width="80em" height="80em" ></div>
        <div class="col-lg-10 col-md-1 col-sm-8 col-xs-4"> <h1 class="text-center">Be'leaf</h1></div>
        <div class="col-lg-1 col-md-1 col-sm-2 col-xs-4" style="margin-top: 1.5em;"> <a href="../template.php?page=acceuil" ><button class="btn bouton">retour</button></a></div>
    </div>

    <div id="form" class="col-lg-offset-2 col-lg-10">
        <h1>Prevision</h1>
        <form class="form-inline">
            <div class="col-lg-3 col-md-3 col-sm-5 col-xs-6">
            <!-- <label for="exampleInputEmail1" class="form-label">Email</label> -->
            Date : <input type="date" class="form-control" id="date"  name="date" >
            </div>
            <input type="submit" id="button" value="chercher" class=" btn bouton">
        </form>
    </div>

    <div id="sary" class="col-lg-offset-2 col-lg-10" style="margin-top: 2em;">
        <label>Poids total the restant : </label><p id="ptotal"></p>
        <label>montant : </label><p id="montant"></p>
        <div id="boxes">

        </div>
    </div>
    
</div>
<!-- <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script> -->
<!-- <script src="../assets/js/sidebarmenu.js"></script> -->
<script rel="text/javascript">
    var date=document.getElementById("date");
    const button=document.getElementById("button");
    button.addEventListener('click' , ()=>{
        console.log(date.value);
        // var xhr=sendForm("post","traitementfarany.php?date="+date.value,null,true);
        // // var retour;
        // xhr.onload  = function(){ 
        //     if(xhr.status  == 200) {
        //         var retour = JSON.parse(xhr.responseText);
        //         var cle=['id','dateVente','produit','quantite','prixUnitaire'];
        //         createBoxes(retour,cle);
        //         // window.alert("reussi");
        //     } else {
        //         window.alert("ERROR XHR "+xhr.status());
        //     }
        // };
    });

</script>

</body>
</html>