<?php
	session_start();
	if(!isset($_SESSION["etablissement"]["id"])){
		$_SESSION["etablissement"]["id"] = $res;
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
