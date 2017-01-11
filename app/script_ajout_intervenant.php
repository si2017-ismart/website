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
		'id'=>$id_etablissement,
		'nom'=>$_POST['nom'],
		'prenom'=>$_POST['prenom'],
		'identifiant'=>$_POST['id'],
		'password'=>$_POST['password']
		);

$opts_intervenant = array(
	'http'=>array(
    'method' =>"POST",
    'header' =>"Content-type: application/json\r\n"."Accept: application/json\r\n",
    'content'=>json_encode($data_intervenant)
  )
);

$url_intervenant = "http://localhost:3000/api/etablissements/intervenants/add";

$context_intervenant  = stream_context_create($opts_intervenant);

$res_intervenant  = file_get_contents(
				   $url_intervenant, 
	               false, 
	               $context_intervenant);
 header('Location: http://localhost/projet_intensif/view/intervenants.php');
 exit();
?>