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
		'id_etablissement'=>$id_etablissement,
		'id'=>$_POST['identifiant'],
		'nom'=>$_POST['nom'],
		'xPosition'=>$_POST['x'],
		'yPosition'=>$_POST['y'],
		'portee'=>$_POST['portee']
		);

$opts_beacon = array(
	'http'=>array(
    'method' =>"POST",
    'header' =>"Content-type: application/json\r\n"."Accept: application/json\r\n",
    'content'=>json_encode($data_beacon)
  )
);

$url_beacon = "http://192.168.12.228:3000/api/beacons/add";

$context_beacon  = stream_context_create($opts_beacon);

$res_beacon  = file_get_contents(
			   $url_beacon, 
               false, 
               $context_beacon);

header('Location: http://localhost/projet_intensif/view/beacons.php');
exit();
?>