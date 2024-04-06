<?php
session_start();
include_once 'funzioniInclude.php';
$message = '';
$user = [
	'prenotazione'=>'',
	'cognome'=>'',
	'nome'=>'',
	'camera'=>'',
	'adulti'=>'',
	'periodoIn'=>'',
	'periodoOut'=>'',
	'tariffa'=>'',
];
$error = [
	'prenotazione'=>'',
	'cognome'=>'',
	'nome'=>'',
	'camera'=>'',
	'adulti'=>'',
	'periodoIn'=>'',
	'periodoOut'=>'',
	'tariffa'=>'',
];
$message = '';
if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$user['prenotazione'] = filter_input(INPUT_POST,'prenotazione', FILTER_SANITIZE_NUMBER_INT);
	$user['nome'] = filter_input(INPUT_POST, 'nome');
	$user['cognome'] = filter_input(INPUT_POST, 'cognome');
	$user['camera'] = filter_input(INPUT_POST,'camera', FILTER_SANITIZE_NUMBER_INT);
	$user['adulti'] = filter_input(INPUT_POST,'adulti', FILTER_SANITIZE_NUMBER_INT);
	$user['tariffa'] = filter_input(INPUT_POST, 'tariffa', FILTER_SANITIZE_NUMBER_INT);
	$timeIn = strtotime($_POST['periodoIn']);
	$timeOut = strtotime($_POST['periodoOut']);
	$user['periodoIn'] = $timeIn ? date('Y-m-d', $timeIn) : '';
	$user['periodoOut'] = $timeOut ? date('Y-m-d', $timeOut) : '';
	$error['nome'] = convalidaTesto($user['nome'], 2, 30) ? '' : 'Lunghezza nome non valida : minimo 2 e massimo 30 caratteri<br>';
	$error['cognome'] = convalidaTesto($user['cognome'], 2, 30) ? '' : 'Lunghezza cognome non valida : minimo 2 e massimo 30 caratteri<br>';
	$error['camera'] = convalidaNumeri($user['camera'], 1, 60) ? '' : 'Camera inesistente<br>';
	$error['adulti'] = convalidaNumeri($user['adulti'], 1, 4) ? '' : 'Numero adulti non consentito, minimo 1 e massimo 4<br>';
	date_default_timezone_set("Europe/Rome");
    $nowDate = date('Y-m-d');
	$error['periodoIn'] = ($user['periodoIn'] >= $nowDate) ? '' : 'Data non corretta';
	$error['periodoOut'] = ($user['periodoOut'] > $user['periodoIn']) ? '' : 'Data non corretta';
	$error['tariffa'] = $user['tariffa'] ? '' : 'Inserire tariffa';
	$invalid = implode($error); 
	if($invalid){
		$message = ' Correggi i seguenti errori :';
	}else{
		$_SESSION['prenotazione'] = $user['prenotazione'];
		$_SESSION['camera'] = $user['camera'];
		$_SESSION['cognome'] = $user['cognome'];
		$_SESSION['nome'] = $user['nome'];
		$_SESSION['prenotazione'] = $user['prenotazione'];
		$_SESSION['periodoIn'] = $user['periodoIn'];
		$_SESSION['periodoOut'] = $user['periodoOut'];
		$_SESSION['adulti'] = $user['adulti'];
		$_SESSION['tariffa'] = $user['tariffa'];
		header('location:inserisciPreno.php');	
	}
}
?>