<?php

$data_beacon = array(
		'id'=>'58760d6779d119080d6dd8dd'
		);

$opts_beacon = array(
	'http'=>array(
    'method' =>"GET",
    'header' =>"Content-type: application/json\r\n"."Accept: application/json\r\n",
    'content'=>json_encode($data_beacon)
  )
);

$url_beacon = "http://localhost:3000/api/beacons/getByEtablissement/58760d6779d119080d6dd8dd";

$context_beacon  = stream_context_create($opts_beacon);

var_dump($context_beacon);

$res_beacon  = file_get_contents(
				   $url_beacon, 
	               false, 
	               $context_beacon);

var_dump($res_beacon);

?>