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
$message = '';
	$preno = intval($_SESSION['prenotazione']);
	$cognome = $_SESSION['cognome'];
	$nome = $_SESSION['nome'];
	$cam = intval($_SESSION['camera']);
	$in = strtotime($_SESSION['periodoIn']);
	$out = strtotime($_SESSION['periodoOut']);	
	$dayIn = date('Y-m-d', $in);
	$dayOut = date('Y-m-d', $out);
	$pax = intval($_SESSION['adulti']);
	$tariffa = intval($_SESSION['tariffa']);
	$arguments = [
		'id_prenotazione'=>$preno,
		'cognome'=>$cognome,
		'nome'=>$nome,
	];
	//var_dump($arguments); // ok
	$arguments3 = [
		'checked'=>1,
		'id_prenotazione'=>$preno,
	];
	$sqlPreno = "SELECT * FROM preno WHERE id_prenotazione = :id_prenotazione AND cognome = :cognome AND nome = :nome";
	$verifica = pdoQuery($pdo, $sqlPreno, $arguments);
	//var_dump($verifica);
	$arguments2 = [];
	if($verifica){
		$controllo = $verifica->fetchAll();
		//var_dump($controllo); // ok
		foreach($controllo as $datiControllo){
		    $arguments2 = [
				'id_prenotazione'=>$datiControllo['id_prenotazione'],
				'cognome'=>$datiControllo['cognome'],
				'nome'=>$datiControllo['nome'],
				'pax'=>$datiControllo['pax'],
				'id_camera'=>$datiControllo['id_camera'],		
				'giorno_in'=>$datiControllo['giorno_in'],
				'giorno_out'=>$datiControllo['giorno_out'],
				'tariffa'=>$datiControllo['tariffa'],		
		     ];
		}
		try{
		$sql1 = "INSERT INTO in_home (id_prenotazione, cognome, nome, pax, id_camera, giorno_in, giorno_out, tariffa) VALUES(:id_prenotazione, :cognome, :nome, :pax, :id_camera, :giorno_in, :giorno_out, :tariffa);";
		$datiInseriti = pdoQuery($pdo, $sql1, $arguments2);
		$sql2 = "UPDATE preno SET checked = :checked WHERE id_prenotazione = :id_prenotazione;";
		$datiAggiornati = pdoQuery($pdo, $sql2, $arguments3);		
		echo 'check-in effettuato';
		if(!$datiInseriti){
			throw new Exception('Prenotazione non trovata');
		}
	      }catch(Exception $e){
		$e = 'Prenotazione non trovata';
		echo $e;
	}
}
?>
</div>
<?php include 'sidebarR.php'; ?>
</div>
</div>
</body>




