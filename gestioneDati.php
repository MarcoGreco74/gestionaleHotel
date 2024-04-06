<?php
include_once 'connPDO.php';
if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$camera = $_POST['id_camera']; 
	$sql = "SELECT * FROM in_home WHERE id_camera = $camera";
	$result = $pdo->query($sql);
	$datiAdd = $result->fetchAll();	
	$datiFiniti = json_encode($datiAdd);
	echo $datiFiniti;	
}	
?>