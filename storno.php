<?php
include_once 'connPDO.php';
if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$idProd = $_POST['id'];
	$sql = "DELETE FROM tabella_addebiti WHERE id=$idProd";	
	$result = $pdo->query($sql);
	$verifica = $result->fetchAll();	
}	
?>