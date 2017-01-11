<?php

$data_beacon = array(
		'id'=>$_POST['identifiant'],
		'nom'=>$_POST['nom'],
		'id_etablissement'=>'58760d6779d119080d6dd8dd'
		);

var_dump($data_beacon);

$opts_beacon = array(
	'http'=>array(
    'method' =>"POST",
    'header' =>"Content-type: application/json\r\n"."Accept: application/json\r\n",
    'content'=>json_encode($data_beacon)
  )
);

$url_beacon = "http://localhost:3000/api/beacons/add";

$context_beacon  = stream_context_create($opts_beacon);

var_dump($context_beacon);

$res_beacon  = file_get_contents(
			   $url_beacon, 
               false, 
               $context_beacon);

var_dump($res_beacon);

?>