<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);
include_once 'connPDO.php';
?>
<?php include 'head.php'; ?>
<style>
<?php include "gestionaleCSS.css"; ?>
</style>
<?php include 'convalidaPreno.php'; ?>
<body>
<?php include 'hder.php'; ?>
<div id='contenitore' class='container-container-fluid'>
<div class="row ">
<?php include 'sidebarL.php'; ?>
<div id="areaCentrale" class="col-6 container-fluid">
<?php 
$sql2 = "SELECT * FROM preno WHERE checked = 0 ORDER BY id_prenotazione DESC;";
?>
<table class="table table-success table-striped table-hover">
	<thead>
		<tr><th>Prenotazione</th><th>Cognome</th><th>Nome</th><th>Camera</th><th>Pax</th><th>Day In</th><th>Day Out</th><th>Tariffa</th></tr>
	</thead>
	<tbody>
<?php
foreach($pdo->query($sql2) as $row){ 
	$id_preno = $row['id_prenotazione']; 
	$cognome = $row['cognome'];
	$nome = $row['nome'];
	$camera = $row['id_camera'];
	$adulti = $row['pax'];
	$dayIn = $row['giorno_in'];
	$dayOut = $row['giorno_out'];
	$tariffa = $row['tariffa'];
?>
<tr>
<td><a class="page-link" href="modificaPreno.php?id_prenotazione=<?= $id_preno ?>&cognome=<?= $cognome ?>&nome=<?= $nome ?>&id_camera=<?= $camera ?>&pax=<?= $adulti ?>&giorno_in=<?= $dayIn ?>&giorno_out=<?= $dayOut ?>&tariffa=<?= $tariffa ?>"><?= $id_preno ?></a></td>
<td><a class="page-link" href="modificaPreno.php?id_prenotazione=<?= $id_preno ?>&cognome=<?= $cognome ?>&nome=<?= $nome ?>&id_camera=<?= $camera ?>&pax=<?= $adulti ?>&giorno_in=<?= $dayIn ?>&giorno_out=<?= $dayOut ?>&tariffa=<?= $tariffa ?>"><?= $cognome ?></a></td>
<td><a class="page-link" href="modificaPreno.php?id_prenotazione=<?= $id_preno ?>&cognome=<?= $cognome ?>&nome=<?= $nome ?>&id_camera=<?= $camera ?>&pax=<?= $adulti ?>&giorno_in=<?= $dayIn ?>&giorno_out=<?= $dayOut ?>&tariffa=<?= $tariffa ?>"><?= $nome ?></a></td>
<td><a class="page-link" href="modificaPreno.php?id_prenotazione=<?= $id_preno ?>&cognome=<?= $cognome ?>&nome=<?= $nome ?>&id_camera=<?= $camera ?>&pax=<?= $adulti ?>&giorno_in=<?= $dayIn ?>&giorno_out=<?= $dayOut ?>&tariffa=<?= $tariffa ?>"><?= $camera ?></a></td>
<td><a class="page-link" href="modificaPreno.php?id_prenotazione=<?= $id_preno ?>&cognome=<?= $cognome ?>&nome=<?= $nome ?>&id_camera=<?= $camera ?>&pax=<?= $adulti ?>&giorno_in=<?= $dayIn ?>&giorno_out=<?= $dayOut ?>&tariffa=<?= $tariffa ?>"><?= $adulti ?></a></td>
<td><a class="page-link" href="modificaPreno.php?id_prenotazione=<?= $id_preno ?>&cognome=<?= $cognome ?>&nome=<?= $nome ?>&id_camera=<?= $camera ?>&pax=<?= $adulti ?>&giorno_in=<?= $dayIn ?>&giorno_out=<?= $dayOut ?>&tariffa=<?= $tariffa ?>"><?= convertDate($dayIn) ?></a></td>
<td><a class="page-link" href="modificaPreno.php?id_prenotazione=<?= $id_preno ?>&cognome=<?= $cognome ?>&nome=<?= $nome ?>&id_camera=<?= $camera ?>&pax=<?= $adulti ?>&giorno_in=<?= $dayIn ?>&giorno_out=<?= $dayOut ?>&tariffa=<?= $tariffa ?>"><?= convertDate($dayOut) ?></a></td>
<td><a class="page-link" href="modificaPreno.php?id_prenotazione=<?= $id_preno ?>&cognome=<?= $cognome ?>&nome=<?= $nome ?>&id_camera=<?= $camera ?>&pax=<?= $adulti ?>&giorno_in=<?= $dayIn ?>&giorno_out=<?= $dayOut ?>&tariffa=<?= $tariffa ?>"><?= $tariffa ?></a></td>
</tr>	 		
<?php } ?>
</tbody>
</table>
</div>
<?php include 'sidebarR.php'; ?>
</div>
</div>
<script>
</script>
</body>