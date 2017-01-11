<?php

$data = array(
		'identifiant'=>$_POST['identifiant'],
		'password'=>$_POST['password'],
		);

var_dump($data);

$opts2 = array(
  'http'=>array(
    'method' =>"POST",
    'header' =>"Content-type: application/json\r\n"."Accept: application/json\r\n",
    'content'=>json_encode($data)
  )
);

$url  = "http://localhost:3000/api/etablissements/loginAdmin";

$context  = stream_context_create($opts2);

var_dump($context);

$res  = file_get_contents(
			   $url, 
               false, 
               $context);

$res = json_decode($res);
var_dump($res);

if ($res->success){
	session_start();
	if(!isset($_SESSION["etablissement"]["id"])){
		$_SESSION["etablissement"]["id"] = $res->id_etablissement;
	}
  	header('Location: http://localhost/projet_intensif/view/etablissement.php');
  	exit();
}
?>
