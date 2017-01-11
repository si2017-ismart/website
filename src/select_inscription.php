<?php 
//echo "Exécution de la fonction....................";

if(isset($_POST['nom'])   && !empty($_POST['nom'])     &&
 isset($_POST['prenom'])  && !empty($_POST['prenom'])  && 
 isset($_POST['adresse']) && !empty($_POST['adresse']) && 
 isset($_POST['cp'])      && !empty($_POST['cp'])      &&
 isset($_POST['ville'])   && !empty($_POST['ville'])   &&
 isset($_POST['pays'])    && !empty($_POST['pays'])    ){

//echo "Exécution de la fonction";

$req = "SELECT inscription('".$_POST['nom']."','".$_POST['prenom']."','".$_POST['adresse']."','".$_POST['cp']."','".$_POST['ville']."','".$_POST['pays']."')";
       
$conn = pg_connect("host=postgres dbname=livres user=lecottier password=lecottier")or die("pb_connexion".pg_last_error());

$query=pg_query($conn,$req);

echo pg_fetch_result($query, 0);    

pg_free_result($query);
pg_close($conn);

}
?>