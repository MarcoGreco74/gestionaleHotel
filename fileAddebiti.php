<?php
session_start();
include_once 'connPDO.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
  if($_POST['selProd'] != ""){
	$selAddebito = $_POST['selProd'];
	$selCamera = $_POST['id_camera'];
    $quantita = $_POST['quantita'];	
	$sql2 = "SELECT id_addebito, reparto, prezzo FROM descrizione_addebito WHERE prodotto = '$selAddebito'";
	$result2 = $pdo->query($sql2);
	$fetchAdd = $result2->fetchAll();
	foreach($fetchAdd as $item2){
		$id_add = $item2['id_addebito'];
		$prezzo = $item2['prezzo'];
		$reparto = $item2['reparto'];
	}		
		$sql3 = "INSERT INTO tabella_addebiti (id, id_addebito, id_camera, quantita) VALUES(NULL, $id_add, $selCamera, $quantita);";
		$result3 = $pdo->query($sql3);	
$sql4 = "SELECT * FROM tabella_addebiti AS t_a INNER JOIN descrizione_addebito AS d_a ON t_a.id_addebito = d_a.id_addebito WHERE d_a.prodotto = '$selAddebito' AND d_a.id_addebito = $id_add;";
$result4 = $pdo->query($sql4);
$datiProd = $result4->fetchAll();
$datiFiniti = json_encode($datiProd);
echo $datiFiniti;
	 }
  }
?>
