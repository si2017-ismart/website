function getRequestHttp(){
    if (window.XMLHttpRequest){
       return new XMLHttpRequest();
   }
   else{
       return new ActiveXObject("Microsoft.XMLHTTP");
   }
}

function getDataForm(){
    var nom=document.select_inscription.nom.value;
    var prenom=document.select_inscription.prenom.value;
    var adresse=document.select_inscription.adresse.value;
    var cp=document.select_inscription.cp.value;
    var ville=document.select_inscription.ville.value;
    var pays=document.select_inscription.pays.value;
    return "nom="+nom+"&prenom="+prenom+"&adresse="+adresse
    +"&cp="+cp+"&ville="+ville+"&pays="+pays;
}

function sendRequest()
{
    var requeteHttp=getRequestHttp();
    if(requeteHttp==null){
        alert("Impossible d'utiliser Ajax sur ce navigateur");
    }
    else{
       requeteHttp.open("POST","select_inscription.php",false);
       requeteHttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       requeteHttp.send(getDataForm());
	if(requeteHttp.readyState==4) // requete achevée. Résultat transmis
    {
	    if(requeteHttp.status==200){// fin correcte de la requete
            if (requeteHttp.responseText == "0"){
                alert('Identification non valide, veuillez modifier les saisies');
            }
            else{
                document.cookie="codec="+requeteHttp.responseText+"; expires="+new Date(2050,1,1).toGMTString()+"; path=/";
                alert('Votre code client est: "'+requeteHttp.responseText+'"\n\n /!\\ à mémoriser (identifiant de connexion) ');
                location.href = "catalogue.php";
            } 
        }
        else
            alert("Error :"+requeteHttp.status+",La requete ne s'est pas correctement executée");
    }
}
return false;
}
