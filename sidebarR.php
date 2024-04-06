<?php
/*ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);*/
include_once 'connPDO.php';
include_once 'funzioniInclude.php';
$sql = "SELECT * FROM in_home";
$datiInHome = pdoQuery($pdo, $sql)->fetchAll();
$arguments = [];
$arguments2 = [];
$arrProdotti = [];
foreach($datiInHome as $itemInHome){
	$camInHome = $itemInHome['id_camera'];
	array_push($arguments, $camInHome);	
	}

$sql2 = "SELECT id_camera FROM camere ORDER BY id_camera ASC";
foreach($pdo->query($sql2) as $row2){ 
		$camera = $row2['id_camera'];
		array_push($arguments2, $camera);
	}
$sql3 = "SELECT * FROM descrizione_addebito;";
foreach($pdo->query($sql3) as $row3){	
  $prodotto = $row3['prodotto'];			
  $prezzo = $row3['prezzo'];
  $idAdd = $row3['id_addebito'];
}
?>
<div class="col bg-dark d-flex align-items-start flex-column bd-highlight mb-3">
<nav class="nav flex-column text-center ">
  <div class="p-2"><a class="nav-pills active" aria-current="page" href="#">Camere<br>Singole X</a></div>
  <div class="p-2"><a href="javascript:displayCam(<?=$arguments2[0] ?>);" class="room"><button type="button" class='btn btn-success<?php if(in_array($arguments2[0], $arguments)) echo 'btn btn-danger' ?>'><?= $arguments2[0] ?></button></a></div>
  <div class="p-2"><a href="javascript:displayCam(<?=$arguments2[1] ?>);" class="room"><button type="button" class="btn btn-info<?php if(in_array($arguments2[1], $arguments)) echo 'btn btn-danger' ?>"><?= $arguments2[1] ?></button></a></div>
  <div class="p-2"><a href="javascript:displayCam(<?=$arguments2[2] ?>);" class="room"><button type="button" class="btn btn-primary<?php if(in_array($arguments2[2], $arguments)) echo 'btn btn-danger' ?>"><?= $arguments2[2] ?></button></a></div>
  <div class="p-2"><a href="javascript:displayCam(<?=$arguments2[15] ?>);" class="room"><button type="button" class="btn btn-success<?php if(in_array($arguments2[15], $arguments)) echo 'btn btn-danger' ?>"><?= $arguments2[15] ?></button></a></div>
  <div class="p-2"><a href="javascript:displayCam(<?=$arguments2[16] ?>);" class="room"><button type="button" class="btn btn-info<?php if(in_array($arguments2[16], $arguments)) echo 'btn btn-danger' ?>"><?= $arguments2[16] ?></button></a></div>
  <div class="p-2"><a href="javascript:displayCam(<?=$arguments2[17] ?>);" class="room"><button type="button" class="btn btn-primary<?php if(in_array($arguments2[17], $arguments)) echo 'btn btn-danger' ?>"><?= $arguments2[17] ?></button></a></div>
  <div class="p-2"><a href="javascript:displayCam(<?=$arguments2[30] ?>);" class="room"><button type="button" class="btn btn-success<?php if(in_array($arguments2[30], $arguments)) echo 'btn btn-danger' ?>"><?= $arguments2[30] ?></button></a></div>
  <div class="p-2"><a href="javascript:displayCam(<?=$arguments2[31] ?>);" class="room"><button type="button" class="btn btn-info<?php if(in_array($arguments2[31], $arguments)) echo 'btn btn-danger' ?>"><?= $arguments2[31] ?></button></a></div>
  <div class="p-2"><a href="javascript:displayCam(<?=$arguments2[32] ?>);" class="room"><button type="button" class="btn btn-primary<?php if(in_array($arguments2[32], $arguments)) echo 'btn btn-danger' ?>"><?= $arguments2[32] ?></button></a></div>
  <div class="p-2"><a href="javascript:displayCam(<?=$arguments2[45] ?>);" class="room"><button type="button" class="btn btn-success<?php if(in_array($arguments2[45], $arguments)) echo 'btn btn-danger' ?>"><?= $arguments2[45] ?></button></a></div>
  <div class="p-2"><a href="javascript:displayCam(<?=$arguments2[46] ?>);" class="room"><button type="button" class="btn btn-info<?php if(in_array($arguments2[46], $arguments)) echo 'btn btn-danger' ?>"><?= $arguments2[46] ?></button></a></div>
  <div class="p-2"><a href="javascript:displayCam(<?=$arguments2[47] ?>);" class="room"><button type="button" class="btn btn-primary<?php if(in_array($arguments2[47], $arguments)) echo 'btn btn-danger' ?>"><?= $arguments2[47] ?></button></a></div>
  </nav>
  </div>
  <div class=" col bg-dark d-flex align-items-start flex-column bd-highlight mb-3 " >
  <nav class="nav flex-column text-center">
  <div class="p-2"><a class="nav-pills active" aria-current="page" href="#">Camere<br>Doppie XX</a></div>
  <div class="p-2"><a href="javascript:displayCam(<?=$arguments2[3] ?>);" class="room"><button type="button" class="btn btn-success<?php if(in_array($arguments2[3], $arguments)) echo 'btn btn-danger' ?>"><?= $arguments2[3] ?></button></a></div>
  <div class="p-2"><a href="javascript:displayCam(<?=$arguments2[4] ?>);" class="room"><button type="button" class="btn btn-info<?php if(in_array($arguments2[4], $arguments)) echo 'btn btn-danger' ?>"><?= $arguments2[4] ?></button></a></div>
  <div class="p-2"><a href="javascript:displayCam(<?=$arguments2[5] ?>);" class="room"><button type="button" class="btn btn-primary<?php if(in_array($arguments2[5], $arguments)) echo 'btn btn-danger' ?>"><?= $arguments2[5] ?></button></a></div>
  <div class="p-2"><a href="javascript:displayCam(<?=$arguments2[18] ?>);" class="room"><button type="button" class="btn btn-success<?php if(in_array($arguments2[18], $arguments)) echo 'btn btn-danger' ?>"><?= $arguments2[18] ?></button></a></div>
  <div class="p-2"><a href="javascript:displayCam(<?=$arguments2[19] ?>);" class="room"><button type="button" class="btn btn-info<?php if(in_array($arguments2[19], $arguments)) echo 'btn btn-danger' ?>"><?= $arguments2[19] ?></button></a></div>
  <div class="p-2"><a href="javascript:displayCam(<?=$arguments2[20] ?>);" class="room"><button type="button" class="btn btn-primary<?php if(in_array($arguments2[20], $arguments)) echo 'btn btn-danger' ?>"><?= $arguments2[20] ?></button></a></div>
  <div class="p-2"><a href="javascript:displayCam(<?=$arguments2[33] ?>);" class="room"><button type="button" class="btn btn-success<?php if(in_array($arguments2[33], $arguments)) echo 'btn btn-danger' ?>"><?= $arguments2[33] ?></button></a></div>
  <div class="p-2"><a href="javascript:displayCam(<?=$arguments2[34] ?>);" class="room"><button type="button" class="btn btn-info<?php if(in_array($arguments2[34], $arguments)) echo 'btn btn-danger' ?>"><?= $arguments2[34] ?></button></a></div>
  <div class="p-2"><a href="javascript:displayCam(<?=$arguments2[35] ?>);" class="room"><button type="button" class="btn btn-primary<?php if(in_array($arguments2[35], $arguments)) echo 'btn btn-danger' ?>"><?= $arguments2[35] ?></button></a></div>
  <div class="p-2"><a href="javascript:displayCam(<?=$arguments2[48] ?>);" class="room"><button type="button" class="btn btn-success<?php if(in_array($arguments2[48], $arguments)) echo 'btn btn-danger' ?>"><?= $arguments2[48] ?></button></a></div>
  <div class="p-2"><a href="javascript:displayCam(<?=$arguments2[49] ?>);" class="room"><button type="button" class="btn btn-info<?php if(in_array($arguments2[49], $arguments)) echo 'btn btn-danger' ?>"><?= $arguments2[49] ?></button></a></div>
  <div class="p-2"><a href="javascript:displayCam(<?=$arguments2[50] ?>);" class="room"><button type="button" class="btn btn-primary<?php if(in_array($arguments2[50], $arguments)) echo 'btn btn-danger' ?>"><?= $arguments2[50] ?></button></a></div>
  </nav>
  </div>
  <div class=" col bg-dark d-flex align-items-start flex-column bd-highlight mb-3 " >
  <nav class="nav flex-column text-center ">
  <div class="p-2"><a class="nav-pills active" aria-current="page" href="#">Camere<br>Doppie M</a></div>
  <div class="p-2"><a href="javascript:displayCam(<?=$arguments2[6] ?>);" class="room"><button type="button" class="btn btn-success<?php if(in_array($arguments2[6], $arguments)) echo 'btn btn-danger' ?>"><?= $arguments2[6] ?></button></a></div>
  <div class="p-2"><a href="javascript:displayCam(<?=$arguments2[7] ?>);" class="room"><button type="button" class="btn btn-info<?php if(in_array($arguments2[7], $arguments)) echo 'btn btn-danger' ?>"><?= $arguments2[7] ?></button></a></div>
  <div class="p-2"><a href="javascript:displayCam(<?=$arguments2[8] ?>);" class="room"><button type="button" class="btn btn-primary<?php if(in_array($arguments2[8], $arguments)) echo 'btn btn-danger' ?>"><?= $arguments2[8] ?></button></a></div>
  <div class="p-2"><a href="javascript:displayCam(<?=$arguments2[21] ?>);" class="room"><button type="button" class="btn btn-success<?php if(in_array($arguments2[21], $arguments)) echo 'btn btn-danger' ?>"><?= $arguments2[21] ?></button></a></div>
  <div class="p-2"><a href="javascript:displayCam(<?=$arguments2[22] ?>);" class="room"><button type="button" class="btn btn-info<?php if(in_array($arguments2[22], $arguments)) echo 'btn btn-danger' ?>"><?= $arguments2[22] ?></button></a></div>
  <div class="p-2"><a href="javascript:displayCam(<?=$arguments2[23] ?>);" class="room"><button type="button" class="btn btn-primary<?php if(in_array($arguments2[23], $arguments)) echo 'btn btn-danger' ?>"><?= $arguments2[23] ?></button></a></div>
  <div class="p-2"><a href="javascript:displayCam(<?=$arguments2[36] ?>);" class="room"><button type="button" class="btn btn-success<?php if(in_array($arguments2[36], $arguments)) echo 'btn btn-danger' ?>"><?= $arguments2[36] ?></button></a></div>
  <div class="p-2"><a href="javascript:displayCam(<?=$arguments2[37] ?>);" class="room"><button type="button" class="btn btn-info<?php if(in_array($arguments2[37], $arguments)) echo 'btn btn-danger' ?>"><?= $arguments2[37] ?></button></a></div>
  <div class="p-2"><a href="javascript:displayCam(<?=$arguments2[38] ?>);" class="room"><button type="button" class="btn btn-primary<?php if(in_array($arguments2[38], $arguments)) echo 'btn btn-danger' ?>"><?= $arguments2[38] ?></button></a></div>
  <div class="p-2"><a href="javascript:displayCam(<?=$arguments2[51] ?>);"class="room" ><button type="button" class="btn btn-success<?php if(in_array($arguments2[51], $arguments)) echo 'btn btn-danger' ?>"><?= $arguments2[51] ?></button></a></div>
  <div class="p-2"><a href="javascript:displayCam(<?=$arguments2[52] ?>);" class="room"><button type="button" class="btn btn-info<?php if(in_array($arguments2[52], $arguments)) echo 'btn btn-danger' ?>"><?= $arguments2[52] ?></button></a></div>
  <div class="p-2"><a href="javascript:displayCam(<?=$arguments2[53] ?>);" class="room"><button type="button" class="btn btn-primary<?php if(in_array($arguments2[53], $arguments)) echo 'btn btn-danger' ?>"><?= $arguments2[53] ?></button></a></div>
  </nav>
  </div>
  <div class=" col bg-dark d-flex align-items-start flex-column bd-highlight mb-3 " >
  <nav class="nav flex-column text-center">
  <div class="p-2"><a class="nav-pills active" aria-current="page" href="#">Camere<br>Triple XXX</a></div>
  <div class="p-2"><a href="javascript:displayCam(<?=$arguments2[9] ?>);" class="room"><button type="button" class="btn btn-success<?php if(in_array($arguments2[9], $arguments)) echo 'btn btn-danger' ?>"><?= $arguments2[9] ?></button></a></div>
  <div class="p-2"><a href="javascript:displayCam(<?=$arguments2[10] ?>);" class="room"><button type="button" class="btn btn-info<?php if(in_array($arguments2[10], $arguments)) echo 'btn btn-danger' ?>"><?= $arguments2[10] ?></button></a></div>
  <div class="p-2"><a href="javascript:displayCam(<?=$arguments2[11] ?>);" class="room"><button type="button" class="btn btn-primary<?php if(in_array($arguments2[11], $arguments)) echo 'btn btn-danger' ?>"><?= $arguments2[11] ?></button></a></div>
  <div class="p-2"><a href="javascript:displayCam(<?=$arguments2[24] ?>);" class="room"><button type="button" class="btn btn-success<?php if(in_array($arguments2[24], $arguments)) echo 'btn btn-danger' ?>"><?= $arguments2[24] ?></button></a></div>
  <div class="p-2"><a href="javascript:displayCam(<?=$arguments2[25] ?>);" class="room"><button type="button" class="btn btn-info<?php if(in_array($arguments2[25], $arguments)) echo 'btn btn-danger' ?>"><?= $arguments2[25] ?></button></a></div>
  <div class="p-2"><a href="javascript:displayCam(<?=$arguments2[26] ?>);" class="room"><button type="button" class="btn btn-primary<?php if(in_array($arguments2[26], $arguments)) echo 'btn btn-danger' ?>"><?= $arguments2[26] ?></button></a></div>
  <div class="p-2"><a href="javascript:displayCam(<?=$arguments2[39] ?>);" class="room"><button type="button" class="btn btn-success<?php if(in_array($arguments2[39], $arguments)) echo 'btn btn-danger' ?>"><?= $arguments2[39] ?></button></a></div>
  <div class="p-2"><a href="javascript:displayCam(<?=$arguments2[40] ?>);" class="room"><button type="button" class="btn btn-info<?php if(in_array($arguments2[40], $arguments)) echo 'btn btn-danger' ?>"><?= $arguments2[40] ?></button></a></div>
  <div class="p-2"><a href="javascript:displayCam(<?=$arguments2[41] ?>);" class="room"><button type="button" class="btn btn-primary<?php if(in_array($arguments2[41], $arguments)) echo 'btn btn-danger' ?>"><?= $arguments2[41] ?></button></a></div>
  <div class="p-2"><a href="javascript:displayCam(<?=$arguments2[54] ?>);" class="room"><button type="button" class="btn btn-success<?php if(in_array($arguments2[54], $arguments)) echo 'btn btn-danger' ?>"><?= $arguments2[54] ?></button></a></div>
  <div class="p-2"><a href="javascript:displayCam(<?=$arguments2[55] ?>);" class="room"><button type="button" class="btn btn-info<?php if(in_array($arguments2[55], $arguments)) echo 'btn btn-danger' ?>"><?= $arguments2[55] ?></button></a></div>
  <div class="p-2"><a href="javascript:displayCam(<?=$arguments2[56] ?>);" class="room"><button type="button" class="btn btn-primary<?php if(in_array($arguments2[56], $arguments)) echo 'btn btn-danger' ?>"><?= $arguments2[56] ?></button></a></div>
  </nav>
  </div>
  <div class=" col bg-dark d-flex align-items-start flex-column bd-highlight mb-3  " >
  <nav class="nav flex-column text-center">
  <div class="p-2"><a class="nav-pills active" aria-current="page" href="#">Camere<br>Triple MX</a></div>
  <div class="p-2"><a href="javascript:displayCam(<?=$arguments2[12] ?>);" class="room"><button type="button" class="btn btn-success<?php if(in_array($arguments2[12], $arguments)) echo 'btn btn-danger' ?>"><?= $arguments2[12] ?></button></a></div>
  <div class="p-2"><a href="javascript:displayCam(<?=$arguments2[13] ?>);" class="room"><button type="button" class="btn btn-info<?php if(in_array($arguments2[13], $arguments)) echo 'btn btn-danger' ?>"><?= $arguments2[13] ?></button></a></div>
  <div class="p-2"><a href="javascript:displayCam(<?=$arguments2[14] ?>);" class="room"><button type="button" class="btn btn-primary<?php if(in_array($arguments2[14], $arguments)) echo 'btn btn-danger' ?>"><?= $arguments2[14] ?></button></a></div>
  <div class="p-2"><a href="javascript:displayCam(<?=$arguments2[27] ?>);" class="room"><button type="button" class="btn btn-success<?php if(in_array($arguments2[27], $arguments)) echo 'btn btn-danger' ?>"><?= $arguments2[27] ?></button></a></div>
  <div class="p-2"><a href="javascript:displayCam(<?=$arguments2[28] ?>);" class="room"><button type="button" class="btn btn-info<?php if(in_array($arguments2[28], $arguments)) echo 'btn btn-danger' ?>"><?= $arguments2[28] ?></button></a></div>
  <div class="p-2"><a href="javascript:displayCam(<?=$arguments2[29] ?>);" class="room"><button type="button" class="btn btn-primary<?php if(in_array($arguments2[29], $arguments)) echo 'btn btn-danger' ?>"><?= $arguments2[29] ?></button></a></div>
  <div class="p-2"><a href="javascript:displayCam(<?=$arguments2[42] ?>);" class="room"><button type="button" class="btn btn-success<?php if(in_array($arguments2[42], $arguments)) echo 'btn btn-danger' ?>"><?= $arguments2[42] ?></button></a></div>
  <div class="p-2"><a href="javascript:displayCam(<?=$arguments2[43] ?>);" class="room"><button type="button" class="btn btn-info<?php if(in_array($arguments2[43], $arguments)) echo 'btn btn-danger' ?>"><?= $arguments2[43] ?></button></a></div>
  <div class="p-2"><a href="javascript:displayCam(<?=$arguments2[44] ?>);" class="room"><button type="button" class="btn btn-primary<?php if(in_array($arguments2[44], $arguments)) echo 'btn btn-danger' ?>"><?= $arguments2[44] ?></button></a></div>
  <div class="p-2"><a href="javascript:displayCam(<?=$arguments2[57] ?>);" class="room"><button type="button" class="btn btn-success<?php if(in_array($arguments2[57], $arguments)) echo 'btn btn-danger' ?>"><?= $arguments2[57] ?></button></a></div>
  <div class="p-2"><a href="javascript:displayCam(<?=$arguments2[58] ?>);" class="room"><button type="button" class="btn btn-info<?php if(in_array($arguments2[58], $arguments)) echo 'btn btn-danger' ?>"><?= $arguments2[58] ?></button></a></div>
  <div class="p-2"><a href="javascript:displayCam(<?=$arguments2[59] ?>);" class="room"><button type="button" class="btn btn-primary<?php if(in_array($arguments2[59], $arguments)) echo 'btn btn-danger' ?>"><?= $arguments2[59] ?></button></a></div>
</nav>
</div>

<!--MODAL BOX ck-out -->
<div class="modal fade" id="mb" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" >
    <div class="modal-content" style='border:5px solid green; height:550px; overflow: auto;'>
      <div class="modal-header" style='background-color:#d5e2ef;'>
		<div class="row">
		<div class="col">
		<label><h5 class="modal-title" id="exampleModalLabel">Cognome </h5></label>
		<input type="text" class="form-control" id ="cognomeMB" placeholder="First name" aria-label="First name">
		</div>
		<div class="col">
		<label><h5 class="modal-title" id="exampleModalLabel">Nome </h5></label>
		<input type="text" class="form-control" id="nomeMB" placeholder="Last name" aria-label="Last name">
		</div>
		<div class="col">
		<label><h5 class="modal-title" id="exampleModalLabel">Camera</h5></label>
		<input type="text" class="form-control" id="cameraMB" placeholder="Camera" aria-label="Camera">
		</div>
		</div>
      </div>
      <div class="modal-body">	
			<table class="table table-striped" id="tableMB">
				<thead>
					<tr><th>Data</th><th>Reparto</th><th>Descrizione</th><th>Quantità</th><th>Prezzo Unità</th><th>Prezzo totale</th></tr>
				</thead>
				<tbody>				
				</tbody>
			</table>
			<div id='totaleMB'></div>
      </div>
      <div class="modal-footer" style='background-color:#d5e2ef;'>
	  <form action="gestioneCKout.php" method="POST">
	    <input type="hidden" name="camCKout" id="camCKout">
        <input type="radio" id="tipoDoc" name="tipoDoc" value="Ricevuta">
        <label for="tipoDoc">Ricevuta fiscale</label><br>
        <input type="radio" id="tipoDoc" name="tipoDoc" value="Fattura">
        <label for="tipoDoc">Fattura</label><br> 
		<input type="submit" class="btn btn-success" value="Emetti documento fiscale">
	  </form>
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Chiudi</button>
      </div>
    </div>
  </div>
</div>
<!-- fine modal -->

<!--MODAL BOX modificaSoggiorno -->
<div class="modal fade" id="mbModifica" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" >
    <div class="modal-content" style='border:5px solid green; height:250px; overflow: auto;'>
      <div class="modal-header" style='background-color:#d5e2ef;'>
		<div class="row">
		<div class="col">
		<form action ="modificaSoggiorno.php" method ="POST">
			<label><h5 class="modal-title" id="exampleModalLabel">Cognome </h5></label>
			<input type="text" class="form-control" id ="cognomeModifica" name="cognomeModifica" placeholder="First name" aria-label="First name">
			</div>
			<div class="col">
			<label><h5 class="modal-title" id="exampleModalLabel">Nome </h5></label>
			<input type="text" class="form-control" id="nomeModifica" name ="nomeModifica" placeholder="Last name" aria-label="Last name">
			</div>
			<div class="col">
			<label><h5 class="modal-title" id="exampleModalLabel">Camera</h5></label>
			<input type="text" class="form-control" id="cameraModifica" name ="cameraModifica" placeholder="Camera" aria-label="Camera">
			</div>
			<div class="col">
			<label><h5 class="modal-title" id="exampleModalLabel">Dal</h5></label>
			<input type="date" class="form-control" id="inModifica" name ="inModifica" placeholder="Dal" aria-label="Dal">
			</div>
			<div class="col">
			<label><h5 class="modal-title" id="exampleModalLabel">Al</h5></label>
			<input type="date" class="form-control" id="outModifica" name="outModifica" placeholder="Al" aria-label="Al">
			</div>
			<div class="col">
			<label><h5 class="modal-title" id="exampleModalLabel">Pax</h5></label>
			<input type="number" class="form-control" id="paxModifica" name ="paxModifica" placeholder="Pax" aria-label="Pax">
			</div>
			<div class="col">
			<label><h5 class="modal-title" id="exampleModalLabel">Tariffa</h5></label>
			<input type="number" class="form-control" id="tariffaModifica" name ="tariffaModifica" placeholder="Tariffa" aria-label="Tariffa">
			</div>
			</div>
			</div>
			<div class="modal-footer" style='background-color:#d5e2ef;'>		   
			<input type="hidden" name="camModifica" id="camModifica">
			<input type="submit" class="btn btn-success" name="modifica" value="Modifica">
			<button type="button" class="btn btn-danger" data-bs-dismiss="modal">Chiudi</button>
	    </form>
      </div>
    </div>
  </div>
</div>
<!-- fine modal -->

<!-- modal gestione trasferimento addebito -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Trasferisci addebito</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
	  <div style="border: 2px solid blue; width:80px;" id="currentRoom"></div>
        <select name="camTrasf" id="camTrasf">
			<option>Seleziona camera</option>
		<?php
	      foreach($pdo->query($sql2) as $row2){ ?>	
	        <option value='<?php echo $row2['id_camera']; ?>'><?php echo $row2['id_camera']; ?></option>
		  <?php } ?>	
         </select>
		 <div id='msgTrasf'></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="trasfAdd();">Trasferisci</button>
      </div>
    </div>
  </div>
</div>
<!-- fine modal -->

<script>
let add = {};
let displayDati = {};
let pernot = {};
//let arrTot = [];

function createTable(){ 
	let $table = $('<table>').attr({id: 'tableAdd', class :"table table-success table-striped table-hover"});
	$table.append('<thead>').children('thead').append('<tr />').children('tr').append('<th></th><th style="width:120px;">Data</th><th style="width:120px;">Reparto</th><th style="width:120px;">Descrizione</th><th>Quantità</th><th>Prezzo unità</th><th>Prezzo totale</th><th></th>');
	let $tbody = $table.append('<tbody />').children('tbody');
	$tbody.append('<tr />').children('tr:last').append("<td></td>").append("<td></td>").append("<td></td>").append("<td></td>").append("<td></td>").append("<td></td>");
    $table.appendTo('#div8');
        }
function display(){
	$('#areaCentrale').html('');	
	$('<div></div>').attr({id: 'div1', class : 'col-6 container-fluid'}).appendTo('#areaCentrale');
	$('#div1').css({'border':'5px solid green', 'height':'550px', 'width' : '700px'});
	$('<div></div>').attr({id: 'div2'}).appendTo('#div1');
	$('#div2').css({'background-color':'#d5e2ef'});
	$('<div></div>').attr({id: 'div3', class : 'row'}).appendTo('#div2');
	$('<div></div>').attr({id: 'div4', class : 'col'}).appendTo('#div3');
	let labelPreno = $("<label>").text('Prenotazione');
	(labelPreno).appendTo('#div4');
	let inputPreno = $('<input type="text">').attr({id: 'preno', name: 'preno', class : 'form-control', placeholder : 'Prenotazione', ariaLabel : 'Prenotazione'});
	$(inputPreno).css({'width': '100px'});
	$(inputPreno).prop("readonly", true);
	$(inputPreno).appendTo('#div4');
	let labelCognome = $("<label>").text('Cognome');
	(labelCognome).appendTo('#div4');
	let inputCognome = $('<input type="text">').attr({id: 'cognome', name: 'cognome', class : 'form-control', placeholder : 'Cognome', ariaLabel : 'First Name'});
	$(inputCognome).css({'width': '200px'});
	$(inputCognome).prop("readonly", true);
	$(inputCognome).appendTo('#div4');	
	$('<div></div>').attr({id: 'div5', class : 'col'}).appendTo('#div4');
	let labelNome = $("<label>").text('Nome');
	(labelNome).appendTo('#div5');
	let inputNome = $('<input type="text">').attr({id: 'nome', name: 'nome', class : 'form-control', placeholder : 'Nome', ariaLabel : 'Last Name'});
	$(inputNome).css({'width': '200px'});
	$(inputNome).prop("readonly", true);
	$(inputNome).appendTo('#div5');	
	$('<div></div>').attr({id: 'div6', class : 'col'}).appendTo('#div5');
	let labelPax = $("<label>").text('Pax');
	$(labelPax).appendTo('#div6');
	let inputPax = $('<input type="text">').attr({id: 'pax', name: 'pax', class : 'form-control-sm', placeholder : 'Pax', ariaLabel : 'Pax'});
	$(inputPax).css({'width': '50px'});
	$(inputPax).prop("readonly", true);
	$(inputPax).appendTo('#div6');
	let labelCamera = $("<label>").text('Camera');
	$(labelCamera).appendTo('#div2');
	$('<div></div>').attr({id: 'camera'}).appendTo('#div2');
	$('<div></div>').attr({id: 'div7', class : 'col'}).appendTo('#div2');
	let labelDal = $("<label>").text('Dal');
	$(labelDal).appendTo('#div2');
	let inputDal = $('<input type="text">').attr({id: 'dayIn', name: 'dayIn', class : 'form-control-sm', placeholder : 'Dal', ariaLabel : 'Dal'});
	$(inputDal).appendTo('#div2');	
	$(inputDal).prop("readonly", true);
	let labelAl = $("<label>").text('Al');
	$(labelAl).appendTo('#div2');
	let inputAl = $('<input type="text">').attr({id: 'dayOut', name: 'dayOut', class : 'form-control-sm', placeholder : 'Al', ariaLabel : 'Al'});
	$(inputAl).appendTo('#div2');
	$(inputAl).prop("readonly", true);
	$('<div></div>').attr({id: 'div8'}).appendTo('#div1');
	$('#div8').css({'background-color':'#a9cdf2'});
    createTable();
	$('<div></div>').attr({id: 'totale'}).appendTo('#div8');
	let formAdd = $("<form></form>").attr({id: 'addForm'}).appendTo('#div1');
    let spanProdotto = $('<span></span>').appendTo(formAdd);
	let selectProdotti = $('<select>').attr({class : 'selP form-select form-select-sm', id :'selProd', name :'selProd'}).css({'width': '250px'});
	$(selectProdotti).appendTo(spanProdotto);
    $(selectProdotti).append($('<option>').text('Seleziona addebito'));
	let inputIdProd = $('<input type="hidden">').attr({id: 'idProd', name: 'idProd'});
	$(inputIdProd).appendTo('#addForm');
	<?php
	   foreach($pdo->query($sql3) as $row3){ ?>	
	      $(selectProdotti).append($('<option>').attr({class : 'optProd'}, 'value', '<?php echo $row3['prodotto'] ?>').text('<?= $row3['prodotto'] ?>'));
	      $(inputIdProd).val('<?php echo $row3['id_addebito'] ?>');
	   <?php } ?>	
	let spanQuantita = $('<span></span>').appendTo(formAdd);
	let selectQuantita = $('<select>').attr({class : 'selQ form-select form-select', id : 'quantita', name : 'quantita'}).css({'width': '200px'});
	$(selectQuantita).appendTo(spanQuantita);
    $(selectQuantita).append($('<option>').attr('selected', true).text('Seleziona quantita'));
	$(selectQuantita).append($('<option>').attr('value', 1).text('1'));
	$(selectQuantita).append($('<option>').attr('value', 2).text('2'));
	$(selectQuantita).append($('<option>').attr('value', 3).text('3'));
	$(selectQuantita).append($('<option>').attr('value', 4).text('4'));
	$(selectQuantita).append($('<option>').attr('value', 5).text('5'));
	$(selectQuantita).append($('<option>').attr('value', 6).text('6'));
	$(selectQuantita).append($('<option>').attr('value', 7).text('7'));
	$(selectQuantita).append($('<option>').attr('value', 8).text('8'));
	$(selectQuantita).append($('<option>').attr('value', 9).text('9'));
	$(selectQuantita).append($('<option>').attr('value', 10).text('10'));
	let inputAdd = $('<input type="button">').attr({class : 'btn btn-success', id : 'addebita', name : 'addebita', value : 'Addebita'});
	$(inputAdd).appendTo('#addForm');
	let inputPernottamento = $('<input type="button">').attr({class : 'btn btn-primary', id : 'pernottamento', name : 'pernottamento', value : 'Addebita pernottamento'});	
	$(inputPernottamento).appendTo('#addForm');
	$('<div></div>').attr({id: 'div9'}).appendTo('#div1');
	$('#div9').css({'background-color': '#d5e2ef'});
	let btnDocFisc = $('<button type="submit">').attr({id :'btnDocFisc', class : 'btn btn-secondary'}).text('Emetti documento fiscale');
	$(btnDocFisc).appendTo('#div9');
	let inputDividiConto = $('<input type="button">').attr({class : 'btn btn-secondary'}).val('Dividi conto');
    $(inputDividiConto).appendTo('#div9');
	let inputModifica = $('<input type="button">').attr({class : 'btn btn-primary'}).val('Modifica soggiorno');
	$(inputModifica).appendTo('#div9');
	inputModifica.on('click', modificaSoggiorno);
	let inputStornaAdd = $('<input type="button">').attr({class : 'btn btn-danger'}).val('Storna addebito');
    $(inputStornaAdd).appendTo('#div9');
	$(inputStornaAdd).on('click', stornoAdd);
	let inputStornaBB = $('<input type="button">').attr({class : 'btn btn-danger'}).val('Storna pernottamento');
    $(inputStornaBB).appendTo('#div9');
	$(inputStornaBB).on('click', stornoBB);
	let inputTrasfAdd = $('<input type="button">').attr({class : 'btn btn-primary'}).val('Trasferisci addebito');
    $(inputTrasfAdd).appendTo('#div9');
	inputTrasfAdd.on('click', gestioneTrasf);	
	let inputCkOut = $('<input type="button">').attr({class : 'btn btn-primary'}).val('Vai al check-out');
    $(inputCkOut).appendTo('#div9');
	inputCkOut.on('click', apriCKout);
	let btnClose = $('<button type="button">').attr({id :'btnClose', class : 'btn btn-danger'}).text('Close');
	$(btnClose).appendTo('#div9');	
	$(btnClose).on('click', refresh);
}

function displayAd(numCam){ // display degli addebiti
	let jqxhr = $.ajax({
	  type : "POST",
	  url : "gestioneAddebiti.php",
	  data : "id_camera="+numCam,
	   async : true,
  });
	jqxhr.done(function(rispostaAdd){	  
	  let datiRisposta = JSON.parse(rispostaAdd);	  
	  for(let x in datiRisposta){		 
		 //createTable(); // ok   
		 let idProd = datiRisposta[x].id;
		 let prodotto = datiRisposta[x].prodotto;		 
		 let reparto = datiRisposta[x].reparto;
		 let data = datiRisposta[x].data;	  
		 let prezzo = datiRisposta[x].prezzo;	 
	     let quantita = datiRisposta[x].quantita;  
		 if(prodotto != undefined){			      
			  let totAdd = prezzo*quantita;
			  $('#tableAdd').append("<tr><td><input type='hidden' value='"+idProd+"'></td><td>"+convertDate(data)+"</td><td>"+reparto+"</td><td>"+prodotto+"</td><td>"+quantita+"</td><td>€ "+prezzo+"</td><td>€ "+totAdd+"</td><td><input type='checkbox' name='selAction[]' value='"+idProd+"'></td></tr>");									  			  			  	 
			}
	    } 
  }).fail(function(){ 
     alert("Operazione fallita Ad!!!");
   }); 
}

function stornoAdd(){	// gestione storni addebiti
    $(":checkbox").each(function () {
        let ischecked = $(this).is(":checked");
        if(ischecked){            
			let ckProd = $(this).val();
			//alert(ckProd);
			let jqxhr = $.ajax({
	        type : "POST",
	        url : "storno.php",
	        data : "id="+ckProd,
	        async : true,
  });
  jqxhr.done(function(risposta5){	  
	  alert('addebito cancellato');			      
  }).fail(function(){ 
     alert("Operazione fallita BB!!!");
      });
     }
  });  
}

function stornoBB(){	// gestione storni bb
    $(":checkbox").each(function () {
        let ischecked = $(this).is(":checked");
        if(ischecked){            
			let ckBB = $(this).val();
			//alert(ckProd);
			let jqxhr = $.ajax({
	        type : "POST",
	        url : "stornoBB.php",
	        data : "id="+ckBB,
	        async : true,
  });
  jqxhr.done(function(risposta6){	  
	  alert('pernottamento cancellato');			      
  }).fail(function(){ 
     alert("Operazione fallita BB!!!");
    });
   }
 });  
}

function trasfAdd(){      // gestione trasferimento addebiti 
	let newCam = document.getElementById('camTrasf').value;
	$(":checkbox").each(function () {
        let ischecked = $(this).is(":checked");
        if(ischecked){            
		  let ckAdd = $(this).val();
	      let jqxhr = $.ajax({
	      type : "POST",
	      url : "trasfAdd.php",
	      data : "id_camera="+newCam+"&id="+ckAdd,
	      async : true,		  
  });
  jqxhr.done(function(risposta7){	  
	  //alert('trasferimento effettuato');
		$('#msgTrasf').html('<h4>Trasferimento effettuato</h4>');
  }).fail(function(){ 
     alert("Operazione fallita !!!");
       });
     }
  });
}

function displayBB(numCam){   // display bb
	let jqxhr = $.ajax({
	  type : "POST",
	  url : "displayBB.php",
	  data : "id_camera="+numCam,
	  async : true,
  });
  jqxhr.done(function(risposta4){	 
  if(risposta4 != ''){
	  let parseRisposta = JSON.parse(risposta4);	  
		for(let i in parseRisposta){			
		  let idBB = parseRisposta[i].id;		  
		  let tariffa = parseRisposta[i].tariffa;
		  let data = parseRisposta[i].data;	
          //let totBB = parseRisposta[i].tot;		  		   		  	  
		  let idPreno = parseRisposta[i].id_prenotazione;
		  if(tariffa != undefined){
			  let addBBrow = "<tr><td><input type='hidden' value='"+idBB+"'></td><td>"+convertDate(data)+"</td><td>Arrangiamento</td><td>BB</td><td>1</td><td>€ "+tariffa+"</td><td>€ "+tariffa+"</td><td><input type='checkbox' value='"+idBB+"'></td></tr>"; 
			   //$('#tableAdd').append("");
			   $('#tableAdd').append(addBBrow);			   		  
		    }
		  }					
        }
  }).fail(function(){ 
     alert("Operazione fallita BB!!!");
  });
}

function displayModifica(numCam){  // gestione modifica dati 
  let jqxhr = $.ajax({
	  type : "POST",
	  url : "gestioneDatiModifica.php",
	  data : "id_camera="+numCam,
	  async : true,
  });
  jqxhr.done(function(risposta8){	       	  	  
	  let datiRisposta = JSON.parse(risposta8);		  
	  for(let x in datiRisposta){		 		 
		 //createTable(); // ok         
		 let idPreno = datiRisposta[x].id_prenotazione;
		 let cognome = datiRisposta[x].cognome;
		 let nome = datiRisposta[x].nome;
		 let pax = datiRisposta[x].pax;
		 let camera = datiRisposta[x].id_camera;
		 let giornoIn = datiRisposta[x].giorno_in;
		 let giornoOut = datiRisposta[x].giorno_out;
		 let tariffa = datiRisposta[x].tariffa;		 
		 displayDati = {cognome : cognome, nome : nome, camera : camera, giornoIn : giornoIn, giornoOut : giornoOut, tariffa : tariffa, pax : pax};
	    } 			
		 $('#cognomeModifica').val(displayDati.cognome);
		 $('#nomeModifica').val(displayDati.nome);
		 $('#cameraModifica').val(displayDati.camera);
		 $('#inModifica').val(displayDati.giornoIn);
		 $('#outModifica').val(displayDati.giornoOut);
		 $('#tariffaModifica').val(displayDati.tariffa);
		 $('#paxModifica').val(displayDati.pax); 
	}).fail(function(){ 
     alert("Operazione fallita !!!");
   }); 
}


function addMB(numCam){   // display addebiti nella modal ck-out
	$('#tableMB').empty();
	let jqxhr = $.ajax({
	  type : "POST",
	  url : "gestioneAddebiti.php",
	  data : "id_camera="+numCam,
	  async : true,
  });
	jqxhr.done(function(rispostaAdd){	  
	  let datiRisposta = JSON.parse(rispostaAdd);	  
	  for(let x in datiRisposta){		 
		 //createTable(); // ok        
		 let prodotto = datiRisposta[x].prodotto;
		 let reparto = datiRisposta[x].reparto;
		 let data = datiRisposta[x].data;    
		 let prezzo = datiRisposta[x].prezzo;	 
	     let quantita = datiRisposta[x].quantita;		   
		 if(prodotto != undefined){
			  let totAdd = prezzo*quantita;	
		      let rowAdd = "<tr><td>"+convertDate(data)+"</td><td>"+reparto+"</td><td>"+prodotto+"</td><td>"+quantita+"</td><td>€ "+prezzo+"</td><td>€ "+totAdd+"</td></tr>";		  		  		  								  			  
			  $('#tableMB').append(rowAdd);		 
			}
	    } 
  }).fail(function(){ 
     alert("Operazione fallita Ad!!!");
   }); 
}

function bbMB(numCam){	 // display bb nella modal ck-out
	let jqxhr = $.ajax({
	  type : "POST",
	  url : "displayBB.php",
	  data : "id_camera="+numCam,
	  async : true,
  });
  jqxhr.done(function(rispostabbMB){ 
  if(rispostabbMB != ''){
	  let parseRisposta = JSON.parse(rispostabbMB);
		for(let i in parseRisposta){			
		  let tariffa = parseRisposta[i].tariffa;
		  let data = parseRisposta[i].data;	
          //let totBB = parseRisposta[i].tot;		  		   		    
		  let idPreno = parseRisposta[i].id_prenotazione;
		  if(tariffa != undefined){			   
	          let addBBrowMB = "<tr><td>"+convertDate(data)+"</td><td>Arrangiamento</td><td>BB</td><td>1</td><td>€ "+tariffa+"</td><td>€ "+tariffa+"</td></tr>";			   			   		   
			   $('#tableMB').append(addBBrowMB);		  
		    }
		  }					
        }
  }).fail(function(){ 
     alert("Operazione fallita BB!!!");
  });
	
}

function totAd(numCam){   // gestione display totale addebiti
	let jqxhr = $.ajax({
	  type : "POST",
	  url : "conteggioAd.php",
	  data : "id_camera="+numCam,
	  //async : false,
  });
  jqxhr.done(function(risposta_totAd){ 
  if(risposta_totAd != ''){
	  let parseRisposta = JSON.parse(risposta_totAd);	  
		for(let i in parseRisposta){			
		  let totAd = parseRisposta[i].totAd;		 
		  if(totAd != undefined){		
				$('<input/>').attr({type: "number", id:'idAd', name:'idAd', class :'clAd'}).appendTo('#totale');								
				$('#idAd').val(totAd);
				$('#idAd').hide(); // non va:  l'input rimane e non è readonly											
				$('#idAd').prop("readonly", true);				
		    }
		  }				       
        }
  }).fail(function(){ 
     alert("Operazione fallita !!!");
  });
}

function totBB(numCam){   // gestione display totale bb
	let jqxhr = $.ajax({
	  type : "POST",
	  url : "conteggioBB.php",
	  data : "id_camera="+numCam,
	  //async : false,
  });
  jqxhr.done(function(risposta_totBB){	  	 
  if(risposta_totBB != ''){
	  let parseRisposta = JSON.parse(risposta_totBB);	  
		for(let n in parseRisposta){			
		  let totBB = +parseRisposta[n].totBB; // stranamente arriva stringa	  
		  if(totBB != undefined){			  
			  let inputTotBB = $('<input/>').attr({type: "number", id: 'idBB', name: 'idBB', class : 'clBB'});			  				
				let totAd = $('#idAd').val();							
				let tot = parseFloat(totAd) + parseFloat(totBB);								
				$(inputTotBB).val(tot);
				$(inputTotBB).prop("readonly", true);
				$(inputTotBB).appendTo('#totale');							
		    }	
		  }					
        }
  }).fail(function(){ 
     alert("Operazione fallita !!!");
  });
}

function totAdMB(numCam){     // gestione display totale addebiti nella modal ck-out
	$('#totaleMB').empty();
	let jqxhr = $.ajax({
	  type : "POST",
	  url : "conteggioAd.php",
	  data : "id_camera="+numCam,
	  //async : false,
  });
  jqxhr.done(function(risposta_totAdMB){ 
  if(risposta_totAdMB != ''){
	  let parseRisposta = JSON.parse(risposta_totAdMB);	  
		for(let i in parseRisposta){			
		  let totAd = parseRisposta[i].totAd;		 
		  if(totAd != undefined){						
				$('<input/>').attr({type: "number", id:'idAdMB', name:'idAdMB', class :'clAdMB'}).appendTo('#totaleMB');				
				$('#idAdMB').val(totAd);
				$('#idAdMB').hide();											
				$('#idAdMB').prop("readonly", true);										
		    }
		  }				       
        }
  }).fail(function(){ 
     alert("Operazione fallita !!!");
  });
}

function totBBMB(numCam){     // gestione display totale bb nella modal ck-out
	$('#totaleMB').empty();
	let jqxhr = $.ajax({
	  type : "POST",
	  url : "conteggioBB.php",
	  data : "id_camera="+numCam,
	  //async : false,
  });
  jqxhr.done(function(risposta_totBBMB){	   
  if(risposta_totBBMB != ''){
	  let parseRisposta = JSON.parse(risposta_totBBMB);	  
		for(let n in parseRisposta){			
		  let totBBMB = +parseRisposta[n].totBB; // stranamente arriva stringa	  
		  if(totBB != undefined){			  			  
			  let inputTotBBMB = $('<input/>').attr({type: "number", id: 'idBBMB', name: 'idBBMB', class : 'clBBMB'});								
				let totAdMB = $('#idAdMB').val();								
				let totMB = parseFloat(totAdMB) + parseFloat(totBBMB);							
				$(inputTotBBMB).val(totMB);
				$(inputTotBBMB).prop("readonly", true);
				$(inputTotBBMB).appendTo('#totaleMB');							
		    }	
		  }					
        }
  }).fail(function(){ 
     alert("Operazione fallita !!!");
  });
}

function displayCam(numCam){   // gestione display dati, addebiti, bb della camera
  sessionStorage.setItem('camera', numCam);
  let currentRoom = sessionStorage.getItem('camera');
  document.getElementById('currentRoom').innerHTML = currentRoom;
  let jqxhr = $.ajax({
	  type : "POST",
	  url : "gestioneDati.php",
	  data : "id_camera="+numCam
  });
  jqxhr.done(function(risposta){
	  display();     	  	  
	  let datiRisposta = JSON.parse(risposta);	  
	  for(let x in datiRisposta){		 		 
		 //createTable(); // ok         
		 let idPreno = datiRisposta[x].id_prenotazione;
		 let cognome = datiRisposta[x].cognome;
		 let nome = datiRisposta[x].nome;
		 let pax = datiRisposta[x].pax;
		 let camera = datiRisposta[x].id_camera;
		 let giornoIn = datiRisposta[x].giorno_in;
		 let giornoOut = datiRisposta[x].giorno_out;
		 let tariffa = datiRisposta[x].tariffa;
		 $('#preno').val(idPreno);
		 $('#cognome').val(cognome);
		 $('#nome').val(nome);
		 $('#pax').val(pax);
		 $('#camera').html(numCam);
		 $('#dayIn').val(convertDate(giornoIn));
		 $('#dayOut').val(convertDate(giornoOut));
		 displayDati = {cognome : cognome, nome : nome, camera : camera};
	    } 			
		 $('#cognomeMB').val(displayDati.cognome);
		 $('#nomeMB').val(displayDati.nome);
		 $('#cameraMB').val(displayDati.camera);
		 $('#camCKout').val(displayDati.camera);		 
		$.when(this).then(function(){ // esegue funzioni callBack che sono oggetti deferred che rappresentano eventi asincroni
		  //alert('ok Cam');
		  displayModifica(numCam); 
	      displayAd(numCam);
		  addMB(numCam);	  
        }).then(function(){
			//alert('ok Ad')			 
			displayBB(numCam);
			bbMB(numCam);
			totAd(numCam);
			totAdMB(numCam);
			totBB(numCam);	
			totBBMB(numCam);		        	
		});
		let btnAdd = document.getElementById('addebita');
		btnAdd.addEventListener('click', function(){
			addebito(numCam);			
		});
		let btnPernot = document.getElementById('pernottamento');
		btnPernot.addEventListener('click', function(){
			bbGiornaliero(numCam);
		});
   }).fail(function(){ 
     alert("Operazione fallita !!!");
   }); 
}

		
/*function createStorage(prod, prez, rep, dt){
    let newObj = new Object();
    newObj.prodotto = prod;
    newObj.prezzo = prez;
    newObj.reparto = rep;
	newObj.data = dt;
    if(sessionStorage.addebiti){
       addebiti = JSON.parse(sessionStorage.getItem('addebiti'));
    }else{
     addebiti = [];
    }
		addebiti.push(newObj);	
		sessionStorage.setItem('addebiti', JSON.stringify(addebiti));
		let recuperoObj = sessionStorage.getItem('addebiti');
			let test = Object.values(JSON.parse(recuperoObj));
		    for(let x in test){
			  //console.log(test[x].prodotto);
			  if(test[x].prodotto != undefined){
				  console.log('undefined');
			     let newRow = "<tr><td>"+test[x].data+"</td><td>"+test[x].reparto+"</td><td>"+test[x].prodotto+"</td><td></td><td>"+test[x].prezzo+"</td><td></td></tr>";
			     $('table tbody').append(newRow);
			   }
		    }
}*/

function bbGiornaliero(numCam){  // gestione addebito bb
	let jqxhr = $.ajax({
	  type : "POST",
	  url : "filePernottamento.php",
	  data : "id_camera="+numCam,
  });
  jqxhr.done(function(risposta3){  	 
  if(risposta3 != ''){
	  let parseRisposta = JSON.parse(risposta3);	  
		for(let i in parseRisposta){
		  let idBB = parseRisposta[i].id;
		  let tariffa = parseRisposta[i].tariffa;
		  let data = parseRisposta[i].data;		  	   		  	  
		  let idPreno = parseRisposta[i].id_prenotazione;	
		  pernot = {tariffa : tariffa, data : convertDate(data)};		  
		      }	
		  if( pernot.tariffa != undefined){
	        let addBBrow = "<tr><td><input type='hidden' value='"+idBB+"'></td><td>"+pernot.data+"</td><td>Arrangiamento</td><td>BB</td><td>1</td><td>€ "+pernot.tariffa+"</td><td>€ "+pernot.tariffa+"</td><td><input type='checkbox' value='"+idBB+"'></td></tr>"; 
	         $('#tableAdd').append(addBBrow);
	         }
			 $.when(this).then(function(){
		  //alert('ok Cam');
		  $("input[name='idBB']").hide();	  
	      totAd(numCam);	  
        }).then(function(){
			//alert('ok Ad');
			$("input[name='idAd']").hide();
			totBB(numCam);	
		}); 
      }
  }).fail(function(){ 
     alert("Operazione fallita!!!");
  });
}

function addebito(numCam){  // gestione addebito vari (NON bb)
	//console.log(numCam);
	let qtySel = document.getElementById('quantita').selectedIndex > 0 ? document.getElementById('quantita').selectedIndex : alert('seleziona la quantità');	
	let checkProd = $('#selProd').find(":selected").val();	
	let jqxhr = $.ajax({
	  type : "POST",
	  url : "fileAddebiti.php",
	  data : "selProd="+checkProd+"&id_camera="+numCam+"&quantita="+qtySel,
  });
  jqxhr.done(function(risposta2){	  
  if(risposta2 != ''){
	  let parseRisposta = JSON.parse(risposta2);
		for(let i in parseRisposta){	
		  let idProd = parseRisposta[i].id;
		  let prezzo = parseRisposta[i].prezzo;		 		  
		  let prodotto = parseRisposta[i].prodotto;		 
		  let data = parseRisposta[i].data;		  	  
		  let reparto = parseRisposta[i].reparto;		  	  
		  let quantita = parseRisposta[i].quantita;		  
		  //let idProd = parseRisposta[i].
		  $('#idProd').val();
		  add = {prezzo : prezzo , prodotto : prodotto, data : convertDate(data), reparto : reparto, quantita : quantita};
		  }		  
	  } 
	  //createStorage(add.prodotto, add.prezzo, add.reparto, add.data);
	if(add.prodotto != undefined){		
	  let newRow = "<tr><td><input type='hidden' value='"+idProd+"'></td><td>"+add.data+"</td><td>"+add.reparto+"</td><td>"+add.prodotto+"</td><td>"+add.quantita+"</td><td>€ "+add.prezzo+"</td><td>€ "+add.prezzo*add.quantita+"</td><td><input type='checkbox' value='"+idProd+"'></td></tr>";	  
	  $('#tableAdd').append(newRow);	  
	 }	
	 $.when(this).then(function(){
		  //alert('ok Cam');
		  $("input[name='idBB']").hide();	  
	      totAd(numCam);	  
        }).then(function(){
			//alert('ok Ad');
			$("input[name='idAd']").hide();
			totBB(numCam);	
		}); 
  }).fail(function(){ 
     alert("Operazione fallita!!!");
  });
}

function gestioneTrasf(){  // modal trasferimento addebiti
	const finestraModal2 = new bootstrap.Modal('#staticBackdrop');
	finestraModal2.show();
}

function modificaSoggiorno(){
  const finestraModal3 = new bootstrap.Modal('#mbModifica');
  finestraModal3.show();
}

function apriCKout(){  // modal del ck-out
  const finestraModal1 = new bootstrap.Modal('#mb');
  finestraModal1.show();
}
 function refresh(){
	 location.reload();
 }
/////////////////////
</script>

