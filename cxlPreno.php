<?php
session_start();
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);
include_once 'connPDO.php';
include_once 'funzioniInclude.php';
?>
<?php include 'head.php'; ?>
<style>
<?php include "gestionaleCSS.css"; ?>
</style>
<body>
<?php include 'hder.php'; ?>
<div id='contenitore' class='container-container-fluid'>
<div class="row ">
<?php include 'sidebarL.php'; ?>
<div id="areaCentrale" class="col-6 container-fluid">
<?php
$preno = intval($_SESSION['prenotazione']);
$camera = intval($_SESSION['camera']);
$cognome = $_SESSION['cognome'];
$nome = $_SESSION['nome'];
$in = strtotime($_SESSION['periodoIn']);
$out = strtotime($_SESSION['periodoOut']);
$periodoIn = date('Y-m-d', $in);
$periodoOut = date('Y-m-d', $out);
$pax = intval($_SESSION['adulti']);
$tariffa = intval($_SESSION['tariffa']);
$arguments = [
	'id_prenotazione'=>$preno,							
	'checked'=>0,
	];	
$arguments2 = [
	'id_prenotazione'=>$preno,							
	];		
	$sql = "SELECT COUNT(id_prenotazione) FROM preno WHERE id_prenotazione = :id_prenotazione AND checked = :checked;";
	$verifica = pdoQuery($pdo, $sql, $arguments)->fetchColumn();
	if($verifica > 0){	
		$sql2 = "DELETE FROM preno WHERE id_prenotazione = :id_prenotazione;";
		$cxlPreno = pdoQuery($pdo, $sql2, $arguments2);
		if($cxlPreno){
			echo 'Cancellazione effettuata';			
		  }else{
			echo 'Cancellazione non riuscita';
		 }
	 }else{
		 echo 'Cancellazione non riuscita';
	 }
?>
</div>
<?php include 'sidebarR.php'; ?>
</div>
</div>
</body>