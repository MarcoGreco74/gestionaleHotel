<?php
include_once 'connPDO.php';
if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$camera = $_POST['id_camera']; 
	$sql = "SELECT SUM(prezzo*quantita) as totAd FROM tabella_addebiti JOIN descrizione_addebito ON tabella_addebiti.id_addebito = descrizione_addebito.id_addebito WHERE id_camera = $camera";
	$result = $pdo->query($sql);
	$datiAdd = $result->fetchAll();	
	$datiFiniti = json_encode($datiAdd);
	echo $datiFiniti;
}	
?>