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
$error = ['giorno_in'=>''];
$arguments = [
	'id_prenotazione'=>$preno,
	'cognome'=>$cognome,
	'nome'=>$nome,
	'pax'=>$pax,
	'id_camera'=>$camera,		
	'giorno_in'=>$periodoIn,
	'giorno_out'=>$periodoOut,
	'tariffa'=>$tariffa,	
	];
$arguments2 = [
		'checked'=>1,
		'id_prenotazione'=>$preno,
	];
	$arguments3 = ['id_prenotazione'=>$preno];
	//var_dump($arguments);
	echo '<br>';
	//var_dump($arguments2);
try{
		date_default_timezone_set("Europe/Rome");
		$nowDate = date('Y-m-d');
	    $error['giorno_in'] = ($arguments['giorno_in'] == $nowDate) ? '' : 'Data non corretta';
		if(!$error['giorno_in']){
			$sql = "SELECT COUNT(*) FROM in_home WHERE id_prenotazione = :id_prenotazione;";
			$verifica =  pdoQuery($pdo, $sql, $arguments3)->fetchColumn();
			if($verifica == 0){
				$sql1 = "INSERT INTO in_home (id_prenotazione, cognome, nome, pax, id_camera, giorno_in, giorno_out, tariffa) VALUES(:id_prenotazione, :cognome, :nome, :pax, :id_camera, :giorno_in, :giorno_out, :tariffa);";
				$datiInseriti = pdoQuery($pdo, $sql1, $arguments);
				$sql2 = "UPDATE preno SET checked = :checked WHERE id_prenotazione = :id_prenotazione;";
				$datiAggiornati = pdoQuery($pdo, $sql2, $arguments2);				
				echo 'check-in effettuato';
		     }else{
				 echo 'Camera già in casa';
			 }
		}else{
			echo 'Data check-in non valida';
		}
	      }catch(Exception $e){
		//$e = 'Prenotazione non trovata';
		echo $e;
	}
?>
</div>
<?php include 'sidebarR.php'; ?>
</div>
</div>
</body>
