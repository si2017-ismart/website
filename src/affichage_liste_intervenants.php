<?php
session_start();
if (isset($_SESSION["etablissement"]["id"])){
	$id_etablissement = $_SESSION["etablissement"]["id"];
}
else{
	header('Location: http://localhost/projet_intensif/src/catalogue.php');
  	exit();
}

var_dump($id_etablissement);

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

$url_intervenant = "http://localhost:3000/api/etablissements/intervenants/getByEtablissement/".$id_etablissement;

var_dump($url_intervenant);

$context_intervenant  = stream_context_create($opts_intervenant);

var_dump($context_intervenant);

$res_intervenant  = file_get_contents(
				   $url_intervenant, 
	               false, 
	               $context_intervenant);

var_dump($res_intervenant);

?>