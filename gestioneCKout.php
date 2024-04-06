<?php
/*include_once 'connPDO.php';
//if(isset($_POST['addebita'])){
if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$camera = $_POST['camCKout'];
	$sql = "DELETE FROM in_home WHERE id_camera = $camera;";
	$result = $pdo->query($sql);
	$fetchAdd = $result->fetchAll();
}*/


?>
<?php
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
if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$camera = $_POST['camCKout'];
	$sqlCKout = "DELETE FROM in_home WHERE id_camera = $camera;";
	$resultCKout = $pdo->query($sqlCKout);
	$fetchCKout = $resultCKout->fetchAll();
	if($resultCKout){
	   echo '<h5>Check-out effettuato</h5>';
     }else{
		 echo '<h5>Check-out fallito</h5>';
	 }
}
?>
</div>
<?php include 'sidebarR.php'; ?>
</div>
</div>
</body>