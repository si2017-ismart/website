<?php
session_start();
if (isset($_SESSION["etablissement"]["id"])){
	$id_etablissement = $_SESSION["etablissement"]["id"];
}
else{
	header('Location: http://localhost/projet_intensif/view/catalogue.php');
  	exit();
}

$data_intervention = array(
		'id'=>$id_etablissement
		);

$opts_intervention = array(
	'http'=>array(
    'method' =>"GET",
    'header' =>"Content-type: application/json\r\n"."Accept: application/json\r\n",
    'content'=>json_encode($data_intervention)
  )
);

$url_intervention = "http://192.168.12.228:3000/api/interventions/getByEtablissement/".$id_etablissement;

$context_intervention  = stream_context_create($opts_intervention);

$res_intervention  = file_get_contents(
				   $url_intervention, 
	               false, 
	               $context_intervention);

$res_intervention = json_decode($res_intervention);

echo "<table class='table'>";
echo "<thead><tr><th>Date\t</th><th>Duree\t</th><th>Intervenant\t</th><th>Etablissement\t</th><th>Satisfaction\t</th><th>Profil utilisateur\t</th><th>Id beacon</th></tr><thead>";
foreach ($res_intervention as $value) {
	echo "<tr><td>$value->date\t</td>";
	echo "<td>$value->duree\t</td>";
	echo "<td>".$value->intervenant->prenom." ".$value->intervenant->nom."\t</td>";
	echo "<td>".$value->etablissement->nom."\t</td>";
	echo "<td>$value->satisfaction\t</td>";
	echo "<td>".$value->user->type."\t</td>";
	echo "<td>".$value->beacon->id."\t</td></tr>";
}
echo "</table>";
?>