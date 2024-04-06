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
$arrProd = [];
if(isset($_GET['id_camera'])){
	$camera = $_GET['id_camera']; 
	$sql = "SELECT id_prenotazione, cognome, nome, pax, giorno_in, giorno_out, tariffa FROM in_home WHERE id_camera =$camera";
	//$datiRisorsa = pdoQuery($pdo, $sql)->fetchAll();
	//var_dump($datiRisorsa); // ok
	foreach($pdo->query($sql) as $row){ 
		$id_preno = $row['id_prenotazione']; 
		$cognome = $row['cognome'];
		$nome = $row['nome'];
		$adulti = $row['pax'];
		$dayIn = $row['giorno_in'];
		$dayOut = $row['giorno_out'];
		$tariffa = $row['tariffa'];
	 }
}
$sql2 = "SELECT * FROM descrizione_addebito;";
            foreach($pdo->query($sql2) as $row2){	
				$prodotto = $row2['prodotto'];			
				$prezzo = $row2['prezzo'];
				$idAdd = $row2['id_addebito'];
				}
?>
    <div style='border:5px solid green; height:550px;'>
      <div style='background-color:#d5e2ef;'>	  
	  <!--<form>-->
		<div class="row">
		<div class="col">
		<label><h6>Cognome</h6></label>
		<input type="text" readonly class="form-control" placeholder="Last name" aria-label="Last name" name ="cognome" id="cognome" value="<?= $cognome ?>">
		</div>
		<div class="col">
		<label><h6>Nome</h6></label>
		<input type="text" readonly class="form-control" placeholder="First name" aria-label="First name" value="<?= $nome ?>">
		</div>		
		<div class="col">
		<label><h6>Pax</h6></label>
		<input type="text" readonly class="form-control-sm" placeholder="Pax" aria-label="Pax" value="<?= $adulti ?>">
		</div>
		</div>
        <label><h6>Camera</h6></label>
		<div id='camera'><?= $camera ?></div>
		<div class="col">
		<label><h6>Dal</h6></label>
		<input type="text" class="form-control-sm" readonly placeholder="Dal" aria-label="Dal" value="<?= $dayIn ?>">
		</div>
		<div class="col">
		<label><h6>Al</h6></label>
		<input type="text" class="form-control-sm" readonly placeholder="Al" aria-label="Al" value="<?= $dayOut ?>">
		</div>
      </div>
      <div>	
			<table class="table table-striped">
				<thead>
					<tr><th>Data</th><th>Reparto</th><th>Descrizione</th><th>Quantità</th><th>Prezzo Unità</th><th>Prezzo totale</th></tr>
				</thead>
				<tbody>
					<tr><td><?= $dayIn ?></td><td></td><td></td><td></td><td><?= $tariffa ?></td><td><?= $tariffa ?></td></tr>
					
					<?php 
					 
									echo "<tr><td><div id='test'></div></td><td></td><td>Ciao</td><td></td><td></td><td></td></tr>"; 
								  
					
					?>					    					  				                    													
				</tbody>
			</table>
			<div id='totale'></div>
      </div>
	  <form id="addForm">
	  <span>
	  <select class="form-select form-select-sm" id="selProd" name="selProd" aria-label="Small select example" style="width:250px;">   
	  <option selected>Cerca addebito</option>
	  <?php
	   foreach($pdo->query($sql2) as $row2){ ?>	
		  <option value="<?= $row2['prodotto'] ?>"><?= $row2['prodotto'] ?></option>
	   <?php } ?>
	  </select>
	  </span>
	  <!--<input type="number" name="quantita" style="width:50px;">-->
	  <span>
	  <select id="quantita" name="quantita">
		<option value=1>1</option>
		<option value=2>2</option>
		<option value=3>3</option>
		<option value=4>4</option>
		<option value=5>5</option>
		<option value=6>6</option>
		<option value=7>7</option>
		<option value=8>8</option>
		<option value=9>9</option>
		<option value=10>10</option>
       </select>
	   </span>
	   <input class="btn btn-success" type="submit" value="Addebita" name="addebita"> 
	  </form>
      <div style='background-color:#d5e2ef;'>
		<button class="btn btn-secondary" type="submit">Emetti documento fiscale</button>
		<input class="btn btn-secondary" type="button" value="Dividi conto">
		<input class="btn btn-secondary" type="button" value="Storna addebito">
		<input class="btn btn-secondary" type="button" value="Trasferisci addebito">
		<input class="btn btn-primary" type="button" value="vai al check-out">
		<input class="btn btn-success" type="submit" value="Salva">
		<!--</form>-->
        <button type="button" class="btn btn-danger" aria-label="Close">Chiudi</button>
      </div>
    </div>
</div>
<?php include 'sidebarR.php'; ?>
</div>
</div>
<script>

</script>
</body>
