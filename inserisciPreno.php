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
<div id="areaCentrale" style="overflow:scroll;" class="col-6 container-fluid">
<?php
$idPreno = intval($_SESSION['prenotazione']);
$camera = intval($_SESSION['camera']);
$cognome = $_SESSION['cognome'];
$nome = $_SESSION['nome'];
$in = strtotime($_SESSION['periodoIn']);
$out = strtotime($_SESSION['periodoOut']);
$periodoIn = date('Y-m-d', $in);
$periodoOut = date('Y-m-d', $out);
$pax = intval($_SESSION['adulti']);
$tariffa = intval($_SESSION['tariffa']);
try{
	$arguments1 = [
		'cognome'=>$cognome,
		'nome'=>$nome,
		'id_camera'=>$camera,
		'giorno_in'=>$periodoIn,
		'giorno_out'=>$periodoOut,
		'tariffa'=>$tariffa,
		'pax'=>$pax,
		'checked'=>0,
	];
	$arguments4 = [
		'id_camOccupata'=>$camera,
		'day_in'=>$periodoIn,
		'day_out'=>$periodoOut,
	];
$sql4 = "SELECT COUNT(*) FROM camere_occupate WHERE id_camOccupata = $camera AND (day_in <= '$periodoIn' OR day_in <= '$periodoOut') AND (day_out >= '$periodoIn' OR day_out >= '$periodoOut')";
	$verificaOcc = $pdo->query($sql4);
	$countOcc = $verificaOcc->fetchColumn();
	if($countOcc == 0){
	$sql1 = "INSERT INTO preno (id_prenotazione, cognome, nome, id_camera, giorno_in, giorno_out, tariffa, pax, checked ) VALUES(NULL, :cognome, :nome, :id_camera, :giorno_in, :giorno_out, :tariffa, :pax, :checked);";
	$inserisciPreno = pdoQuery($pdo, $sql1, $arguments1);
	if($sql1){
	   echo 'Prenotazione inserita'; 
	   $nonDisp = 1;
	   $arguments2 = [
		 'disponibilita'=>$nonDisp,
		 'id_camera'=>$camera,		 
	   ];
	   	$sql2 = "UPDATE camere SET disponibilita = :disponibilita WHERE id_camera = :id_camera";  
		$camOccupate = pdoQuery($pdo, $sql2, $arguments2);
		
		$arguments3 = [
			'id_camOccupata'=>$camera,
			'day_in'=>$periodoIn,
			'day_out'=>$periodoOut,
		];
		$sql3 = "INSERT INTO camere_occupate (id_camOccupata, day_in, day_out) VALUES(:id_camOccupata, :day_in, :day_out);";
		$camOcc = pdoQuery($pdo, $sql3, $arguments3);  
	   }else{
		   echo 'query sbagliata';
	   }
	}else{
		echo '<h3>Camera occupata nel periodo richiesto</h3>';
	}
  }catch(Exception $e){
	  //$e = 'Camera non disponibile';
		echo $e;
  } 
?>
</div>
<?php include 'sidebarR.php'; ?>
</div>
</div>
</body>