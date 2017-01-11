<?php
session_start();
if(!isset($_COOKIE["idclient"])){
	echo '<a href="enregistrement.php">Connexion</a>';
}
else{
	if(!isset($_SESSION["nom"])&&!isset($_SESSION["prenom"])){
		$dbconn = pg_connect("host=postgres dbname=livres user=lecottier password=lecottier") or die ("Connexion impossible".pg_last_error());
		$req = "select nom, prenom from client where code =".$_COOKIE["idclient"].";";
		$res = pg_query($dbconn,$req);
		$_SESSION["nom"] = pg_fetch_result($res,0,0);
		$_SESSION["prenom"] = pg_fetch_result($res,0,1);
	}
	$nom = $_SESSION["nom"]; $prenom = $_SESSION["prenom"];
	echo "Bienvenue<br />".$nom." ".$prenom."<br />";

	if(isset($_COOKIE["panier"])){
		echo '<a href="panier.php">Consulter le panier</a><br />';
	}

	//echo '<a href="deconnexion.php">Deconnexion</a>';
	echo 'Deconnexion';
}
?>
