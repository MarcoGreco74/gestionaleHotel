<?php
session_start();
include_once 'connPDO.php';
include_once 'funzioniInclude.php';
$message = '';
$verifica = [];
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
if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$user['prenotazione'] = filter_input(INPUT_POST,'prenotazione', FILTER_SANITIZE_NUMBER_INT);
	$user['cognome'] = filter_input(INPUT_POST, 'cognome');
	$user['nome'] = filter_input(INPUT_POST, 'nome');
	$user['camera'] = filter_input(INPUT_POST,'camera', FILTER_SANITIZE_NUMBER_INT);
	$user['adulti'] = filter_input(INPUT_POST,'adulti', FILTER_SANITIZE_NUMBER_INT);	
	$timeIn = strtotime($_POST['periodoIn']);
	$timeOut = strtotime($_POST['periodoOut']);
	$user['periodoIn'] = date('Y-m-d', $timeIn);
	$user['periodoOut'] = date('Y-m-d', $timeOut);
	$user['tariffa'] = filter_input(INPUT_POST, 'tariffa', FILTER_SANITIZE_NUMBER_INT);
	
	$error['prenotazione'] = $user['prenotazione'] ? '' : 'Numero prenotazione non valido';
	$error['cognome'] = convalidaTesto($user['cognome'], 2, 30) ? '' : 'Lunghezza cognome non valida : minimo 2 e massimo 30 caratteri<br>';
	$error['nome'] = convalidaTesto($user['nome'], 2, 30) ? '' : 'Lunghezza nome non valida : minimo 2 e massimo 30 caratteri<br>';
	$error['camera'] = convalidaNumeri($user['camera'], 1, 60) ? '' : 'Camera inesistente<br>';
	$error['adulti'] = convalidaNumeri($user['adulti'], 1, 4) ? '' : 'Numero adulti non consentito, minimo 1 e massimo 4<br>';
	date_default_timezone_set("Europe/Rome");
    $nowDate = date('Y-m-d');
	$error['periodoIn'] = ($user['periodoIn'] == $nowDate) ? '' : 'Data non corretta';
	$error['periodoOut'] = ($user['periodoOut'] > $user['periodoIn']) ? '' : 'Data non corretta';
	$invalid = implode($error); 
	if($invalid){
		$message = 'Correggi i seguenti errori :';
	}else{
		$_SESSION['camera'] = $user['camera'];
		$_SESSION['cognome'] = $user['cognome'];
		$_SESSION['nome'] = $user['nome'];
		$_SESSION['prenotazione'] = $user['prenotazione'];
		$_SESSION['periodoIn'] = $user['periodoIn'];
		$_SESSION['periodoOut'] = $user['periodoOut'];
		$_SESSION['adulti'] = $user['adulti'];
		$_SESSION['tariffa'] = $user['tariffa'];
		//var_dump($_SESSION); // ok
		header('location:checked_in.php');
		/*$message = 'Grazie, compilazione corretta ';		
		////////////// probabile problema con gli arguments
		$arguments = [
			'id_prenotazione'=>intval($_SESSION['prenotazione']),
			'cognome'=>$_SESSION['cognome'],
			'nome'=>$_SESSION['nome'],
			'pax'=>intval($_SESSION['adulti']),
			'id_camera'=>intval($_SESSION['camera']),
			'giorno_in'=>$_SESSION['periodoIn'],
			'giorno_out'=>$_SESSION['periodoOut'],
			'tariffa'=>intval($_SESSION['tariffa']),
	];
	$arguments2 = [
		'checked'=>1,
		'id_prenotazione'=>intval($_SESSION['prenotazione']),
	];		
		$sqlPreno = "SELECT COUNT(*) FROM preno WHERE id_prenotazione = :id_prenotazione AND cognome = :cognome AND nome = :nome;";
		$verifica = pdoQuery($pdo, $sqlPreno, $arguments)->fetchAColumn();
		if($verifica > 0){
			    var_dump($verifica);*/
		   /*$arguments = [
				'id_prenotazione'=>$user['prenotazione'],
				'cognome'=>$user['cognome'],
				'nome'=>$user['nome'],
				'pax'=>$user['adulti'],
				'id_camera'=>$user['camera'],
				'giorno_in'=>$user['periodoIn'],
				'giorno_out'=>$user['periodoOut'],
				'tariffa'=>$user['tariffa'],*/
				
				/*'id_prenotazione'=>$preno,
				'cognome'=>$cognome,
				'nome'=>$nome,
				'pax'=>$pax,
				'id_camera'=>$cam,
				'giorno_in'=>$dayIn,
				'giorno_out'=>$dayOut,
				'tariffa'=>$tariffa,*/
	/*];
	$arguments2 = [
		'checked'=>1,
		'id_prenotazione'=>$user['prenotazione'],
	];
	$sql1 = "INSERT INTO in_home (id_prenotazione, cognome, nome, pax, id_camera, giorno_in, giorno_out, tariffa) VALUES(:id_prenotazione, :cognome, :nome, :pax, :id_camera, :giorno_in, :giorno_out, :tariffa);";
	$datiInseriti = pdoQuery($pdo, $sql1, $arguments)->fetchAll();
	$sql2 = "UPDATE preno SET checked = :checked WHERE id_prenotazione = :id_prenotazione;";
	$datiAggiornati = pdoQuery($pdo, $sql2, $arguments2)->fetchAll();*/
	
	//header('location:listaINcasa.php');
			
		/*}else{
			$message = 'Prenotazione non trovata';
		}*/
	}
}
?>
