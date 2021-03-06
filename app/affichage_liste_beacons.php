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

$url_beacon = "http://192.168.12.228:3000/api/beacons/getByEtablissement/".$id_etablissement;

$context_beacon  = stream_context_create($opts_beacon);

$res_beacon  = file_get_contents(
				   $url_beacon, 
	               false, 
	               $context_beacon);

$res_beacon = json_decode($res_beacon);

echo '<table class="table">';
echo "<thead><tr><th>Id beacon\t</th><th>Nom beacon\t</th><th>Id établissement\t</th><th>Nom établissement\t</th></tr><thead>";
foreach ($res_beacon as $value) {
	echo "<tr><td>$value->id_beacon\t</td>";
	echo "<td>$value->nom\t</td>";
	echo "<td>".$value->etablissement->id."\t</td>";
	echo "<td>".$value->etablissement->nom."\t</td></tr>";
}
echo "</table>";
?>