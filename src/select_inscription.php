<?php

$data = array(
		'nom'=>$_POST['nom'],
		'adresse'=>$_POST['adresse'],
		'ville'=>$_POST['ville'],
		'pays'=>$_POST['pays'],
		'zip'=>$_POST['zip'],
		'tel'=>$_POST['tel'],
		'mail'=>$_POST['mail']
		);

var_dump($data);

$opts2 = array(
  'http'=>array(
    'method' =>"POST",
    'header' =>"Content-type: application/json\r\n"."Accept: application/json\r\n",
    'content'=>json_encode($data)
  )
);

$url1 = "http://localhost:3000/api/beacons";
$url  = "http://localhost:3000/api/etablissements/add";
$url_interv  = "http://localhost:3000/api/intervenants/add";

$context  = stream_context_create($opts2);

var_dump($context);

$res  = file_get_contents(
			   $url, 
               false, 
               $context);

$res = json_decode($res);
var_dump($res); //id ou erreur TODO

$data_eta = array(
		'id'=>$res,
		'password'=>$_POST['password'],
		'identifiant'=>$_POST['mail']
		);

var_dump($data_eta);

$opts22 = array(
  'http'=>array(
    'method' =>"POST",
    'header' =>"Content-type: application/json\r\n"."Accept: application/json\r\n",
    'content'=>json_encode($data_eta)
  )
);

$url3  = "http://localhost:3000/api/etablissements/createAdmin";

$context_eta  = stream_context_create($opts22);

$res  = file_get_contents(
			   $url3, 
               false, 
               $context_eta);

var_dump($res);
?>
