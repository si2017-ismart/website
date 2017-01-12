<?php
session_start();
if (isset($_SESSION["etablissement"]["id"])){
	$id_etablissement = $_SESSION["etablissement"]["id"];
}
else{
	header('Location: http://localhost/projet_intensif/view/catalogue.php');
  	exit();
}

$data_intervenant = array(
		'id'=>$id_etablissement
		);

$opts_intervenant = array(
	'http'=>array(
    'method' =>"GET",
    'header' =>"Content-type: application/json\r\n"."Accept: application/json\r\n",
    'content'=>json_encode($data_intervenant)
  )
);

$url_intervenant = "http://192.168.12.228:3000/api/etablissements/intervenants/getByEtablissement/".$id_etablissement;

$context_intervenant  = stream_context_create($opts_intervenant);

$res_intervenant  = file_get_contents(
				   $url_intervenant, 
	               false, 
	               $context_intervenant);

$res_intervenant = json_decode($res_intervenant);

echo "<table class='table'>";
echo "<thead><tr><th>Nom\t</th><th>Prenom\t</th><th>Identifiant\t</th><th>Disponibilité\t</th></tr><thead>";
foreach ($res_intervenant->intervenants as $value) {
	echo "<tr><td>".$value->nom."\t</td>";
	echo "<td>".$value->prenom."\t</td>";
	echo "<td>".$value->identifiant."\t</td>";
	echo "<td>".$value->disponibilite."\t</td>";
}
echo "</table>";
?>