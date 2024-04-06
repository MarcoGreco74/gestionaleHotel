<?php
session_start();
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);
include_once 'connPDO.php';
?>
<?php include 'head.php'; ?>
<style>
<?php include "gestionaleCSS.css"; ?>
</style>
<?php include 'convalidaModifica.php'; ?>
<body>
<?php include 'hder.php'; ?>
<div id='contenitore' class='container-container-fluid'>
<div class="row ">
<?php include 'sidebarL.php'; ?>
<div id="areaCentrale" class="col-6 container-fluid">
<?= $message ?>
<?php
if(isset($_GET['id_prenotazione'])){
//if($_SERVER['REQUEST_METHOD'] == 'GET'){
	$preno=$_GET['id_prenotazione'];
	$cognome=$_GET['cognome'];
	$nome=$_GET['nome'];
	$camera=$_GET['id_camera'];
	$pax=$_GET['pax'];
	$dayIn=$_GET['giorno_in'];
	$dayOut=$_GET['giorno_out'];
	$tariffa=$_GET['tariffa'];
} 
?>
<!-- MODIFICA E CK-IN -->
<table class="table table-success table-striped table-hover">
<form action="modificaPreno.php" method='POST'>
<tr><td>Prenotazione : <input type="number" name="prenotazione" value="<?= $preno ?>">
<span><?= $error['prenotazione'] ?></span></td></tr>
<tr><td>Cognome :<input type="text" name="cognome" value="<?= htmlspecialchars($cognome) ?>">
<span><?= $error['cognome'] ?></span>
Nome :<input type="text" name="nome" value="<?= htmlspecialchars($nome) ?>">
<span><?= $error['nome'] ?></span></td></tr>
<tr><td>Camera :<input type="number" name="camera" value="<?= $camera ?>">
<span><?= $error['camera'] ?></span>
Adulti:<input type="number" name="adulti" value="<?= $pax ?>">
<span><?= $error['adulti'] ?></span></td></tr>
<tr><td>Periodo-dal : <input type="date" name="periodoIn" value="<?= $dayIn ?>">
<!--<span><?= $error['periodoIn'] ?></span>-->
Periodo-al :<input type="date" name="periodoOut" value="<?= $dayOut ?>">
<span><?= $error['periodoOut'] ?></span></td></tr>
<tr><td>Tariffa :<input type="number" name="tariffa" value="<?= $tariffa ?>">
<span><?= $error['tariffa'] ?></span></td></tr>
<tr><td>
<input type="submit" name="ckinVeloce" value="Check-in">
<input type="submit" name="modifica" value="Modifica prenotazione">
<input type="submit" name="cxl" value="Cancella prenotazione">
</td></tr>
</form>
</table>
</div>
<?php include 'sidebarR.php'; ?>
</div>
</div>
</body>
</html>