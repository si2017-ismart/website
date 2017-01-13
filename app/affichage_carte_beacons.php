<?php
if (isset($_SESSION["etablissement"]["id"])){
	$id_etablissement = $_SESSION["etablissement"]["id"];
}
else{
	header('Location: http://localhost/projet_intensif/view/catalogue.php');
  	exit();
}

$data_beacon = array(
		'id'=>$id_etablissement
		);

$opts_beacon = array(
	'http'=>array(
    'method' =>"GET",
    'header' =>"Content-type: application/json\r\n"."Accept: application/json\r\n",
    'content'=>json_encode($data_beacon)
  )
);

$url_beacon = "http://192.168.12.228:3000/api/beacons/getByEtablissement/".$id_etablissement;

$context_beacon  = stream_context_create($opts_beacon);

$res_beacon  = file_get_contents(
				   $url_beacon, 
	               false, 
	               $context_beacon);

$res_beacon = json_decode($res_beacon);

echo '<div class="col-sm-8 col-sm-offset-2">';
echo '<div id="fond_carte">';
echo '<img src="../webroot/img/plan.jpg" width="650" />';

foreach ($res_beacon as $value) {
	echo '<div class="beacon_circle '.$value->nom.'" style="width: '.$value->portee.'px;height: '.$value->portee.'px;border-radius: '.$value->portee.'px;opacity: 0.5;position:absolute;top:'.($value->position->y*(650*939)/1421/100-20).'px;left:'.($value->position->x*650/100).'px;">';
	echo '<div class="tooltip_circle">'.$value->nom.'</div>';
	echo '</div>';
}

echo '</div>';
echo '</div>';
?>