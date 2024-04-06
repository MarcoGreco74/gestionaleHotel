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
	'cognome'=>$cognome,
	'nome'=>$nome,
	'id_camera'=>$camera,
	'giorno_in'=>$periodoIn,
	'giorno_out'=>$periodoOut,
	'tariffa'=>$tariffa,
	'pax'=>$pax,
	'checked'=>0,
	];
	//var_dump($arguments); // ok
	$sql1 = "UPDATE preno SET cognome = :cognome, nome = :nome, id_camera = :id_camera, giorno_in = :giorno_in, giorno_out = :giorno_out, tariffa = :tariffa, pax = :pax, checked = :checked WHERE id_prenotazione = :id_prenotazione;";
	$inserisciPreno = pdoQuery($pdo, $sql1, $arguments);
	if($inserisciPreno){
		echo 'Modifica effettuata';
	}else{
		echo 'Modifica non riuscita';
	}
?>
</div>
<?php include 'sidebarR.php'; ?>
</div>
</div>
</body>