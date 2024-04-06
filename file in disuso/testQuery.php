<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);
include_once 'head.php';
include_once 'funzioniInclude.php';
include_once 'connPDO.php';
$arguments = [
	'id_prenotazione'=>17,
	'cognome'=>'Ascani',
	'nome'=>'Franco',
	'id_camera'=>9,
	'giorno_in'=>'2023-12-07',
	'giorno_out'=>'2023-12-08',
	'tariffa'=>65,
	'pax'=>2,
	'checked'=>1,
	];
$sql = "SELECT * FROM preno WHERE id_prenotazione = :id_prenotazione";
$verifica = pdoQuery($pdo, $sql, $arguments)->fetchAll();
var_dump($verifica);
?>
