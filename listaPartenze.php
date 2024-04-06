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
date_default_timezone_set("Europe/Rome");
$nowDate = date('Y-m-d');
$sql3 = "SELECT * FROM in_home WHERE giorno_out = '$nowDate'";
?>
<table class="table table-success table-striped table-hover">
	<thead>
		<tr><th>Prenotazione</th><th>Cognome</th><th>Nome</th><th>Camera</th><th>Pax</th><th>Day In</th><th>Day Out</th><th>Tariffa</th></tr>
	</thead>
	<tbody>
<?php
	foreach($pdo->query($sql3) as $row){ 
		$id_preno = $row['id_prenotazione']; 
		$cognome = $row['cognome'];
		$nome = $row['nome'];
		$camera = $row['id_camera'];
		$adulti = $row['pax'];
		$dayIn = $row['giorno_in'];
		$dayOut = $row['giorno_out'];
		$tariffa = $row['tariffa'];
	?>
	<tr><td><a class="page-link" href="javascript:displayCam(<?=$camera ?>);"><?= $id_preno ?></a><td><a class="page-link" href="javascript:displayCam(<?=$camera ?>);"><?= $cognome ?></a></td><td><a class="page-link" href="javascript:displayCam(<?=$camera ?>);"><?= $nome ?></a></td><td><a class="page-link" href="javascript:displayCam(<?=$camera ?>);"><?= $camera ?></a></td><td><a class="page-link" href="javascript:displayCam(<?=$camera ?>);"><?= $adulti ?></a></td><td><a class="page-link" href="javascript:displayCam(<?=$camera ?>);"><?= convertDate($dayIn) ?></a></td><td><a class="page-link" href="javascript:displayCam(<?=$camera ?>);"><?= convertDate($dayOut) ?></a></td><td><a class="page-link" href="javascript:displayCam(<?=$camera ?>);"><?= $tariffa ?></a></td></tr>
<?php } ?>
  </tbody>
</table>
</div>
<?php include 'sidebarR.php'; ?>
</div>
</div>
</body>