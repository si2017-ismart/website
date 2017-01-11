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
		'id'=>$id_etablissement
		);

$opts_beacon = array(
	'http'=>array(
    'method' =>"GET",
    'header' =>"Content-type: application/json\r\n"."Accept: application/json\r\n",
    'content'=>json_encode($data_beacon)
  )
);

$url_beacon = "http://localhost:3000/api/beacons/getByEtablissement/".$id_etablissement;

$context_beacon  = stream_context_create($opts_beacon);

$res_beacon  = file_get_contents(
				   $url_beacon, 
	               false, 
	               $context_beacon);

$res_beacon = json_decode($res_beacon);
echo "<table border='1px' style='width:100%;'>";
echo "<tr><th>Id établissement\t</th><th>Id beacon\t</th><th>Nom du beacon\t</th></tr>";
foreach ($res_beacon->beacons as $value) {
	echo "<tr>";
	foreach ($value as $case) {
		echo "<td>$case\t</td>";
	}
	echo "</tr>";
}
echo "</table>";
?>