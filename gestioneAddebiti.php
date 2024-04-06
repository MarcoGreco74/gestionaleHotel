<?php
include_once 'connPDO.php';
if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$camera = $_POST['id_camera']; 
	$sql = "SELECT id_camera FROM in_home WHERE id_camera = $camera";
	$result = $pdo->query($sql);
	$verifica = $result->fetchColumn();
	if($verifica > 0){
		$sql2 = "SELECT tabella_addebiti.id, descrizione_addebito.prezzo, descrizione_addebito.prodotto, descrizione_addebito.reparto, tabella_addebiti.data, tabella_addebiti.quantita FROM tabella_addebiti JOIN descrizione_addebito ON tabella_addebiti.id_addebito = descrizione_addebito.id_addebito WHERE id_camera = $camera ORDER BY tabella_addebiti.id ASC";		
		$result2 = $pdo->query($sql2);
		$datiAdd = $result2->fetchAll();		
		$datiFiniti = json_encode($datiAdd);
		echo $datiFiniti;	
	}
}	
?>
