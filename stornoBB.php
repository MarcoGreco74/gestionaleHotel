<?php
include_once 'connPDO.php';
if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$idBB = $_POST['id'];
	$sql = "DELETE FROM tabella_pernottamento WHERE id=$idBB";	
	$result = $pdo->query($sql);
	$verifica = $result->fetchAll();	
}	
?>