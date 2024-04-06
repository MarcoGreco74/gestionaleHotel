<?php
include_once 'connPDO.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
  if($_POST['id_camera'] != ""){
	$camera = $_POST['id_camera'];
	$sql = "SELECT id_prenotazione, tariffa FROM in_home WHERE in_home.id_camera =$camera";
	$result = $pdo->query($sql);
	$datiAdd = $result->fetchAll();
	foreach($datiAdd as $item){
		$idPreno = $item['id_prenotazione'];
		$tariffa = $item['tariffa'];
	} 
	$sql3 = "SELECT * FROM tabella_pernottamento WHERE id_prenotazione = $idPreno";
	$result3 = $pdo->query($sql3);
	$datiPernottamento = $result3->fetchAll();
	$datiFiniti = json_encode($datiPernottamento);
	echo $datiFiniti;
  }
}
?>
