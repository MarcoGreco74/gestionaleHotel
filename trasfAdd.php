<?php
include_once 'connPDO.php';
if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$camera = $_POST['id_camera'];
	$id = $_POST['id'];
	$sql = "UPDATE tabella_addebiti SET id_camera=$camera WHERE id=$id";	
	$result = $pdo->query($sql);
	$verifica = $result->fetchAll();	
}	
?>
