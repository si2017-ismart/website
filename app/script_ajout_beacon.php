<?php

session_start();
if (isset($_SESSION["etablissement"]["id"])){
	$id_etablissement = $_SESSION["etablissement"]["id"];
}
else{
	header('Location: http://localhost/projet_intensif/view/catalogue.php');
  	exit();
}

$data_beacon = array(
		'id'=>$_POST['identifiant'],
		'nom'=>$_POST['nom'],
		'id_etablissement'=>$id_etablissement
		);

$opts_beacon = array(
	'http'=>array(
    'method' =>"POST",
    'header' =>"Content-type: application/json\r\n"."Accept: application/json\r\n",
    'content'=>json_encode($data_beacon)
  )
);

$url_beacon = "http://localhost:3000/api/beacons/add";

$context_beacon  = stream_context_create($opts_beacon);

$res_beacon  = file_get_contents(
			   $url_beacon, 
               false, 
               $context_beacon);

header('Location: http://localhost/projet_intensif/view/beacons.php');
exit();
?>