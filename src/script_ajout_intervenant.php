<?php

$data_intervenant = array(
		'id'=>'58760d6779d119080d6dd8dd',
		'nom'=>$_POST['nom'],
		'prenom'=>$_POST['prenom'],
		'identifiant'=>$_POST['id'],
		'password'=>$_POST['password']
		);

var_dump($data_intervenant);

$opts_intervenant = array(
	'http'=>array(
    'method' =>"POST",
    'header' =>"Content-type: application/json\r\n"."Accept: application/json\r\n",
    'content'=>json_encode($data_intervenant)
  )
);

$url_intervenant = "http://localhost:3000/api/etablissements/intervenant/add";

$context_intervenant  = stream_context_create($opts_intervenant);

var_dump($context_intervenant);

$res_intervenant  = file_get_contents(
				   $url_intervenant, 
	               false, 
	               $context_intervenant);

var_dump($res_intervenant);

?>