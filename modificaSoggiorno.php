<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);
include_once 'connPDO.php';
include_once 'funzioniInclude.php';
include 'head.php';
?>
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
//if(isset($_POST['modifica'])){
if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$camera = intval($_POST['cameraModifica']);
	$cognome = $_POST['cognomeModifica'];
	$nome = $_POST['nomeModifica'];
	$in = strtotime($_POST['inModifica']);
	$out = ($_POST['outModifica'] > $_POST['inModifica']) ? strtotime($_POST['outModifica']) : 'data non corretta';
	$dayIn = date('Y-m-d', $in);
	$dayOut = date('Y-m-d', $out);
	$tariffa = intval($_POST['tariffaModifica']);
	$pax = intval($_POST['paxModifica']);	
	//var_dump($_POST);
	try{
		/*$sql = "UPDATE preno SET cognome ='$cognome', nome='$nome', id_camera = $camera, giorno_out = '$dayOut', tariffa = $tariffa, pax = $pax WHERE id_camera = $camera";
		$result = $pdo->query($sql);*/
		// non cambia la camera
		$sql1 = "UPDATE in_home SET cognome ='$cognome', nome='$nome', id_camera = $camera, giorno_out = '$dayOut', tariffa = $tariffa, pax = $pax WHERE id_camera = $camera";
		$result1 = $pdo->query($sql1);
		$modifica = $result1->fetchAll();
		if($result1){
		   echo '<h5>Modifica effettuata</h5>';
		 }else{
			 echo '<h5>Modifica fallita</h5>';
		 }
	 }catch(Exception $e){ // non visualizzo il msg $e
		$e = '<h5>Modifica fallita</h5>';
		echo $e;
	}
}
?>
</div>
<?php include 'sidebarR.php'; ?>
</div>
</div>
</body>
