<?php


?>
<form method="POST" action="areaCKin.php">
<!-- class="row g-3 needs-validation"-->
   <!--<div class="col-md-4">-->
    <label for="validationCustom01" class="form-label">N° Prenotazione</label>
    <input type="number" class="form-control" id="validationCustom01" name="prenotazione" value="<?= $user['prenotazione'] ?>" required>
    <!--<div class="valid-feedback">
      Looks good!
    </div>-->
  <!--</div>-->
  
  <!--<div class="col-md-4">-->
    <label for="validationCustom01" class="form-label">Cognome</label>
    <input type="text" class="form-control" id="validationCustom01" name="cognome" value="<?= htmlspecialchars($user['cognome']) ?>" required>
	<span><?= $error['cognome'] ?></span>
    <!--<div class="valid-feedback">
      Looks good!
    </div>-->
  <!--</div>-->
  
  <!--<div class="col-md-4">-->
    <label for="validationCustom02" class="form-label">Nome</label>
    <input type="text" class="form-control" id="validationCustom02" name="nome" value="<?= htmlspecialchars($user['nome']) ?>" required>
	<span><?= $error['nome'] ?></span>
    <!--<div class="valid-feedback">
      Looks good!
    </div>-->
  <!--</div>-->
  
  <!--<div class="col-md-1">-->
    <label for="validationCustom01" class="form-label">Adulti</label>
    <input type="number" class="form-control" id="validationCustom01" name="adulti" value="<?= $user['adulti'] ?>" required>
	<span><?= $error['adulti'] ?></span>
    <!--<div class="valid-feedback">
      Looks good!
    </div>-->
  <!--</div>-->
  
  <!--<div class="col-md-4">-->
    <label for="validationCustomUsername" class="form-label">Periodo - dal</label>
    <!--<div class="input-group has-validation">-->
      <span class="input-group-text" id="inputGroupPrepend">Dal</span>
      <input type="date" class="form-control" id="validationCustomUsername" name="periodoIn" aria-describedby="inputGroupPrepend" required value="<?= $user['periodoIn'] ?>">
      <span><?= $error['periodoIn'] ?></span>
	  <!--<div class="invalid-feedback">
        Please choose a date.
      </div>-->
    <!--</div>-->
  <!--</div>-->
  
  <!--<div class="col-md-4">-->
    <label for="validationCustomUsername" class="form-label">Periodo - al</label>
    <!--<div class="input-group has-validation">-->
      <span class="input-group-text" id="inputGroupPrepend">Al</span>
      <input type="date" class="form-control" id="validationCustomUsername" name="periodoOut" aria-describedby="inputGroupPrepend" required value="<?= $user['periodoOut'] ?>">
      <span><?= $error['periodoOut'] ?></span>
	  <!--<div class="invalid-feedback">
        Please choose a date.
      </div>-->
    <!--</div>-->
  <!--</div>-->
  
  <!--<div class="col-md-2">-->
    <label for="validationCustom01" class="form-label">Camera</label>
    <input type="number" class="form-control" id="validationCustom01" name="camera" value="<?= $user['camera'] ?>" required>
	<span><?= $error['camera'] ?></span>
    <!--<div class="valid-feedback">
      Looks good!
       </div>-->
  <!--</div>-->
  
  <hr>
  <h3>Anagrafica</h3>
  <?= $message ?>
  <div class="col-md-4">
    <label for="validationCustom01" class="form-label">Cognome</label>
    <input type="text" class="form-control" id="validationCustom01" value="" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  
  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Nome</label>
    <input type="text" class="form-control" id="validationCustom02" value="" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  
  <div class="col-md-4">
    <label for="validationCustom03" class="form-label">Data di nascita</label>
    <input type="date" class="form-control" id="validationCustom03" required>
    <div class="invalid-feedback">
      Please provide a valid birth date.
    </div>
  </div>
  
  <div class="col-md-1">
    <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
    <label class="form-check-label" for="inlineRadio1">M</label>
    </div>
    <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
    <label class="form-check-label" for="inlineRadio2">F</label>
    </div>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  
  <div class="col-md-6">
    <label for="validationCustom03" class="form-label">Città</label>
    <input type="text" class="form-control" id="validationCustom03" required>
    <div class="invalid-feedback">
      Please provide a valid city.
    </div>
  </div>
  
  <div class="col-md-6">
    <label for="validationCustom03" class="form-label">Stato</label>
    <input type="text" class="form-control" id="validationCustom03" required>
    <div class="invalid-feedback">
      Please provide a valid state.
    </div>
  </div>
  
  <div class="col-md-3">
    <label for="validationCustom05" class="form-label">Zip</label>
    <input type="text" class="form-control" id="validationCustom05" required>
    <div class="invalid-feedback">
      Please provide a valid zip.
    </div>
  </div>
  
  <div class="col-md-6">
    <label for="validationCustom03" class="form-label">Cittadinanza</label>
    <input type="text" class="form-control" id="validationCustom03" required>
    <div class="invalid-feedback">
      Please provide a valid citizenship.
    </div>
  </div>
  
  <div class="col-md-3">
    <label for="validationCustom04" class="form-label">Tipo documento</label>
    <select class="form-select" id="validationCustom04" required>
      <option selected disabled value="">Documento</option>
      <option>Carta d'identità</option>
	  <option>Passaporto</option>
	  <option>Patente di guida</option>
    </select>
    <div class="invalid-feedback">
      Please select a valid document.
    </div>
  </div>
  
  <div class="col-md-6">
    <label for="validationCustom03" class="form-label">Numero documento</label>
    <input type="text" class="form-control" id="validationCustom03" required>
    <div class="invalid-feedback">
      Please provide a valid document number.
    </div>
  </div>
  
  <div class="col-md-6">
    <label for="validationCustom03" class="form-label">Scadenza documento</label>
    <input type="date" class="form-control" id="validationCustom03" required>
    <div class="invalid-feedback">
      Please provide a valid document expire date.
    </div>
  </div>
  
  <!--<div class="col-12">-->
    <!--<button class="btn btn-primary" type="submit">Check-in</button>-->
	<input type="submit" class="btn btn-primary" value="Check-in">
  <!--</div>-->
</form>

<form class="row g-3 needs-validation" method="POST" action="areaCKin.php">
<!-- class="row g-3 needs-validation"-->
   <div class="col-md-4"> 
   Prenotazione :<input type="number" id="validationCustom01" name="prenotazione" value="<?= $user['prenotazione'] ?>">
   </div> 
  <div class="col-md-4">
    Cognome :<input type="text" id="validationCustom01" name="cognome" value="<?= htmlspecialchars($user['cognome']) ?>">
	<span><?= $error['cognome'] ?></span> 
  </div>
  <div class="col-md-4"> 
    Nome :<input type="text" id="validationCustom02" name="nome" value="<?= htmlspecialchars($user['nome']) ?>">
	<span><?= $error['nome'] ?></span>
  </div> 
  <div class="col-md-1">  
    Adulti :<input type="number" id="validationCustom01" name="adulti" value="<?= $user['adulti'] ?>">
	<span><?= $error['adulti'] ?></span>
  </div> 
  <div class="col-md-4">
    <div class="input-group has-validation">
      <span class="input-group-text" id="inputGroupPrepend">Dal</span>
      Periodo - dal :<input type="date" id="validationCustomUsername" name="periodoIn" aria-describedby="inputGroupPrepend" value="<?= $user['periodoIn'] ?>">
      <span><?= $error['periodoIn'] ?></span>
    </div>
  </div> 
  <div class="col-md-4">
    <div class="input-group has-validation">
      <span class="input-group-text" id="inputGroupPrepend">Al</span>
      Periodo - al :<input type="date" id="validationCustomUsername" name="periodoOut" aria-describedby="inputGroupPrepend" value="<?= $user['periodoOut'] ?>">
      <span><?= $error['periodoOut'] ?></span>	  
    </div>
  </div> 
  <div class="col-md-2">
    Camera :<input type="number" id="validationCustom01" name="camera" value="<?= $user['camera'] ?>">
	<span><?= $error['camera'] ?></span>   
  </div>
  
  <hr>
  <h3>Anagrafica</h3>
  <?= $message ?>
  <div class="col-md-4">
    <label for="validationCustom01" class="form-label">Cognome</label>
    <input type="text" id="validationCustom01" value="" >   
  </div>
  
  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Nome</label>
    <input type="text" id="validationCustom02" value="">   
  </div>
  
  <div class="col-md-4">
    <label for="validationCustom03" class="form-label">Data di nascita</label>
    <input type="date" id="validationCustom03">  
  </div>
  
  <div class="col-md-1">
    <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
    <label class="form-check-label" for="inlineRadio1">M</label>
    </div>
    <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
    <label class="form-check-label" for="inlineRadio2">F</label>
    </div>   
  </div>
  
  <div class="col-md-6">
    <label for="validationCustom03" class="form-label">Città</label>
    <input type="text" id="validationCustom03">  
  </div>
  
  <div class="col-md-6">
    <label for="validationCustom03" class="form-label">Stato</label>
    <input type="text" id="validationCustom03">   
  </div>
  
  <div class="col-md-3">
    <label for="validationCustom05" class="form-label">Zip</label>
    <input type="text" id="validationCustom05">   
  </div>
  
  <div class="col-md-6">
    <label for="validationCustom03" class="form-label">Cittadinanza</label>
    <input type="text" id="validationCustom03">    
  </div>
  
  <div class="col-md-3">
    <label for="validationCustom04" class="form-label">Tipo documento</label>
    <select class="form-select" id="validationCustom04">
      <option selected disabled value="">Documento</option>
      <option>Carta d'identità</option>
	  <option>Passaporto</option>
	  <option>Patente di guida</option>
    </select>
  </div>
  
  <div class="col-md-6">
    <label for="validationCustom03" class="form-label">Numero documento</label>
    <input type="text" id="validationCustom03">
  </div>
  
  <div class="col-md-6">
    <label for="validationCustom03" class="form-label">Scadenza documento</label>
    <input type="date" id="validationCustom03">
  </div>
  
  <div class="col-12">
	<input type="submit" class="btn btn-primary" value="Check-in">
  </div>
</form>
<!--------------------------------->
<div class="col bg-dark d-flex align-items-start flex-column bd-highlight mb-3">
<nav class="nav flex-column text-center ">
  <div class="p-2"><a class="nav-pills active" aria-current="page" href="#">Camere<br>Singole X</a></div>
  <div class="p-2"><a href="gestioneRisorsa.php?id_camera=<?=$arguments2[0] ?>"><button type="button" class='btn btn-success<?php if(in_array($arguments2[0], $arguments)) echo 'btn btn-danger' ?>'><?= $arguments2[0] ?></button></a></div>
  <div class="p-2"><a href="gestioneRisorsa.php?id_camera=<?=$arguments2[1] ?>"><button type="button" class="btn btn-info<?php if(in_array($arguments2[1], $arguments)) echo 'btn btn-danger' ?>"><?= $arguments2[1] ?></button></a></div>
  <div class="p-2"><a href="gestioneRisorsa.php?id_camera=<?=$arguments2[2] ?>"><button type="button" class="btn btn-primary<?php if(in_array($arguments2[2], $arguments)) echo 'btn btn-danger' ?>"><?= $arguments2[2] ?></button></a></div>
  <div class="p-2"><a href="gestioneRisorsa.php?id_camera=<?=$arguments2[15] ?>"><button type="button" class="btn btn-success<?php if(in_array($arguments2[15], $arguments)) echo 'btn btn-danger' ?>"><?= $arguments2[15] ?></button></a></div>
  <div class="p-2"><a href="gestioneRisorsa.php?id_camera=<?=$arguments2[16] ?>"><button type="button" class="btn btn-info<?php if(in_array($arguments2[16], $arguments)) echo 'btn btn-danger' ?>"><?= $arguments2[16] ?></button></a></div>
  <div class="p-2"><a href="gestioneRisorsa.php?id_camera=<?=$arguments2[17] ?>"><button type="button" class="btn btn-primary<?php if(in_array($arguments2[17], $arguments)) echo 'btn btn-danger' ?>"><?= $arguments2[17] ?></button></a></div>
  <div class="p-2"><a href="gestioneRisorsa.php?id_camera=<?=$arguments2[30] ?>"><button type="button" class="btn btn-success<?php if(in_array($arguments2[30], $arguments)) echo 'btn btn-danger' ?>"><?= $arguments2[30] ?></button></a></div>
  <div class="p-2"><a href="gestioneRisorsa.php?id_camera=<?=$arguments2[31] ?>"><button type="button" class="btn btn-info<?php if(in_array($arguments2[31], $arguments)) echo 'btn btn-danger' ?>"><?= $arguments2[31] ?></button></a></div>
  <div class="p-2"><a href="gestioneRisorsa.php?id_camera=<?=$arguments2[32] ?>"><button type="button" class="btn btn-primary<?php if(in_array($arguments2[32], $arguments)) echo 'btn btn-danger' ?>"><?= $arguments2[32] ?></button></a></div>
  <div class="p-2"><a href="gestioneRisorsa.php?id_camera=<?=$arguments2[45] ?>"><button type="button" class="btn btn-success<?php if(in_array($arguments2[45], $arguments)) echo 'btn btn-danger' ?>"><?= $arguments2[45] ?></button></a></div>
  <div class="p-2"><a href="gestioneRisorsa.php?id_camera=<?=$arguments2[46] ?>"><button type="button" class="btn btn-info<?php if(in_array($arguments2[46], $arguments)) echo 'btn btn-danger' ?>"><?= $arguments2[46] ?></button></a></div>
  <div class="p-2"><a href="gestioneRisorsa.php?id_camera=<?=$arguments2[47] ?>"><button type="button" class="btn btn-primary<?php if(in_array($arguments2[47], $arguments)) echo 'btn btn-danger' ?>"><?= $arguments2[47] ?></button></a></div>
  </nav>
  </div>
  <!--</div>-->
  <!--<div class="col-1 ">-->
  <div class=" col bg-dark d-flex align-items-start flex-column bd-highlight mb-3 " >
  <nav class="nav flex-column text-center">
  <div class="p-2"><a class="nav-pills active" aria-current="page" href="#">Camere<br>Doppie XX</a></div>
  <div class="p-2"><a href="gestioneRisorsa.php?id_camera=<?=$arguments2[3] ?>"><button type="button" class="btn btn-success<?php if(in_array($arguments2[3], $arguments)) echo 'btn btn-danger' ?>"><?= $arguments2[3] ?></button></a></div>
  <div class="p-2"><a href="gestioneRisorsa.php?id_camera=<?=$arguments2[4] ?>"><button type="button" class="btn btn-info<?php if(in_array($arguments2[4], $arguments)) echo 'btn btn-danger' ?>"><?= $arguments2[4] ?></button></a></div>
  <div class="p-2"><a href="gestioneRisorsa.php?id_camera=<?=$arguments2[5] ?>"><button type="button" class="btn btn-primary<?php if(in_array($arguments2[5], $arguments)) echo 'btn btn-danger' ?>"><?= $arguments2[5] ?></button></a></div>
  <div class="p-2"><a href="gestioneRisorsa.php?id_camera=<?=$arguments2[18] ?>"><button type="button" class="btn btn-success<?php if(in_array($arguments2[18], $arguments)) echo 'btn btn-danger' ?>"><?= $arguments2[18] ?></button></a></div>
  <div class="p-2"><a href="gestioneRisorsa.php?id_camera=<?=$arguments2[19] ?>"><button type="button" class="btn btn-info<?php if(in_array($arguments2[19], $arguments)) echo 'btn btn-danger' ?>"><?= $arguments2[19] ?></button></a></div>
  <div class="p-2"><a href="gestioneRisorsa.php?id_camera=<?=$arguments2[20] ?>"><button type="button" class="btn btn-primary<?php if(in_array($arguments2[20], $arguments)) echo 'btn btn-danger' ?>"><?= $arguments2[20] ?></button></a></div>
  <div class="p-2"><a href="gestioneRisorsa.php?id_camera=<?=$arguments2[33] ?>"><button type="button" class="btn btn-success<?php if(in_array($arguments2[33], $arguments)) echo 'btn btn-danger' ?>"><?= $arguments2[33] ?></button></a></div>
  <div class="p-2"><a href="gestioneRisorsa.php?id_camera=<?=$arguments2[34] ?>"><button type="button" class="btn btn-info<?php if(in_array($arguments2[34], $arguments)) echo 'btn btn-danger' ?>"><?= $arguments2[34] ?></button></a></div>
  <div class="p-2"><a href="gestioneRisorsa.php?id_camera=<?=$arguments2[35] ?>"><button type="button" class="btn btn-primary<?php if(in_array($arguments2[35], $arguments)) echo 'btn btn-danger' ?>"><?= $arguments2[35] ?></button></a></div>
  <div class="p-2"><a href="gestioneRisorsa.php?id_camera=<?=$arguments2[48] ?>"><button type="button" class="btn btn-success<?php if(in_array($arguments2[48], $arguments)) echo 'btn btn-danger' ?>"><?= $arguments2[48] ?></button></a></div>
  <div class="p-2"><a href="gestioneRisorsa.php?id_camera=<?=$arguments2[49] ?>"><button type="button" class="btn btn-info<?php if(in_array($arguments2[49], $arguments)) echo 'btn btn-danger' ?>"><?= $arguments2[49] ?></button></a></div>
  <div class="p-2"><a href="gestioneRisorsa.php?id_camera=<?=$arguments2[50] ?>"><button type="button" class="btn btn-primary<?php if(in_array($arguments2[50], $arguments)) echo 'btn btn-danger' ?>"><?= $arguments2[50] ?></button></a></div>
  </nav>
  </div>
 <!--</div>-->
  <!--<div class="col-1 ">-->
  <div class=" col bg-dark d-flex align-items-start flex-column bd-highlight mb-3 " >
  <nav class="nav flex-column text-center ">
  <div class="p-2"><a class="nav-pills active" aria-current="page" href="#">Camere<br>Doppie M</a></div>
  <div class="p-2"><a href="gestioneRisorsa.php?id_camera=<?=$arguments2[6] ?>"><button type="button" class="btn btn-success<?php if(in_array($arguments2[6], $arguments)) echo 'btn btn-danger' ?>"><?= $arguments2[6] ?></button></a></div>
  <div class="p-2"><a href="gestioneRisorsa.php?id_camera=<?=$arguments2[7] ?>"><button type="button" class="btn btn-info<?php if(in_array($arguments2[7], $arguments)) echo 'btn btn-danger' ?>"><?= $arguments2[7] ?></button></a></div>
  <div class="p-2"><a href="gestioneRisorsa.php?id_camera=<?=$arguments2[8] ?>"><button type="button" class="btn btn-primary<?php if(in_array($arguments2[8], $arguments)) echo 'btn btn-danger' ?>"><?= $arguments2[8] ?></button></a></div>
  <div class="p-2"><a href="gestioneRisorsa.php?id_camera=<?=$arguments2[21] ?>"><button type="button" class="btn btn-success<?php if(in_array($arguments2[21], $arguments)) echo 'btn btn-danger' ?>"><?= $arguments2[21] ?></button></a></div>
  <div class="p-2"><a href="gestioneRisorsa.php?id_camera=<?=$arguments2[22] ?>"><button type="button" class="btn btn-info<?php if(in_array($arguments2[22], $arguments)) echo 'btn btn-danger' ?>"><?= $arguments2[22] ?></button></a></div>
  <div class="p-2"><a href="gestioneRisorsa.php?id_camera=<?=$arguments2[23] ?>"><button type="button" class="btn btn-primary<?php if(in_array($arguments2[23], $arguments)) echo 'btn btn-danger' ?>"><?= $arguments2[23] ?></button></a></div>
  <div class="p-2"><a href="gestioneRisorsa.php?id_camera=<?=$arguments2[36] ?>"><button type="button" class="btn btn-success<?php if(in_array($arguments2[36], $arguments)) echo 'btn btn-danger' ?>"><?= $arguments2[36] ?></button></a></div>
  <div class="p-2"><a href="gestioneRisorsa.php?id_camera=<?=$arguments2[37] ?>"><button type="button" class="btn btn-info<?php if(in_array($arguments2[37], $arguments)) echo 'btn btn-danger' ?>"><?= $arguments2[37] ?></button></a></div>
  <div class="p-2"><a href="gestioneRisorsa.php?id_camera=<?=$arguments2[38] ?>"><button type="button" class="btn btn-primary<?php if(in_array($arguments2[38], $arguments)) echo 'btn btn-danger' ?>"><?= $arguments2[38] ?></button></a></div>
  <div class="p-2"><a href="gestioneRisorsa.php?id_camera=<?=$arguments2[51] ?>"><button type="button" class="btn btn-success<?php if(in_array($arguments2[51], $arguments)) echo 'btn btn-danger' ?>"><?= $arguments2[51] ?></button></a></div>
  <div class="p-2"><a href="gestioneRisorsa.php?id_camera=<?=$arguments2[52] ?>"><button type="button" class="btn btn-info<?php if(in_array($arguments2[52], $arguments)) echo 'btn btn-danger' ?>"><?= $arguments2[52] ?></button></a></div>
  <div class="p-2"><a href="gestioneRisorsa.php?id_camera=<?=$arguments2[53] ?>"><button type="button" class="btn btn-primary<?php if(in_array($arguments2[53], $arguments)) echo 'btn btn-danger' ?>"><?= $arguments2[53] ?></button></a></div>
  </nav>
  </div>
 <!--</div>-->
  <!--<div class="col-1 ">-->
  <div class=" col bg-dark d-flex align-items-start flex-column bd-highlight mb-3 " >
  <nav class="nav flex-column text-center">
  <div class="p-2"><a class="nav-pills active" aria-current="page" href="#">Camere<br>Triple XXX</a></div>
  <div class="p-2"><a href="gestioneRisorsa.php?id_camera=<?=$arguments2[9] ?>"><button type="button" class="btn btn-success<?php if(in_array($arguments2[9], $arguments)) echo 'btn btn-danger' ?>"><?= $arguments2[9] ?></button></a></div>
  <div class="p-2"><a href="gestioneRisorsa.php?id_camera=<?=$arguments2[10] ?>"><button type="button" class="btn btn-info<?php if(in_array($arguments2[10], $arguments)) echo 'btn btn-danger' ?>"><?= $arguments2[10] ?></button></a></div>
  <div class="p-2"><a href="gestioneRisorsa.php?id_camera=<?=$arguments2[11] ?>"><button type="button" class="btn btn-primary<?php if(in_array($arguments2[11], $arguments)) echo 'btn btn-danger' ?>"><?= $arguments2[11] ?></button></a></div>
  <div class="p-2"><a href="gestioneRisorsa.php?id_camera=<?=$arguments2[24] ?>"><button type="button" class="btn btn-success<?php if(in_array($arguments2[24], $arguments)) echo 'btn btn-danger' ?>"><?= $arguments2[24] ?></button></a></div>
  <div class="p-2"><a href="gestioneRisorsa.php?id_camera=<?=$arguments2[25] ?>"><button type="button" class="btn btn-info<?php if(in_array($arguments2[25], $arguments)) echo 'btn btn-danger' ?>"><?= $arguments2[25] ?></button></a></div>
  <div class="p-2"><a href="gestioneRisorsa.php?id_camera=<?=$arguments2[26] ?>"><button type="button" class="btn btn-primary<?php if(in_array($arguments2[26], $arguments)) echo 'btn btn-danger' ?>"><?= $arguments2[26] ?></button></a></div>
  <div class="p-2"><a href="gestioneRisorsa.php?id_camera=<?=$arguments2[39] ?>"><button type="button" class="btn btn-success<?php if(in_array($arguments2[39], $arguments)) echo 'btn btn-danger' ?>"><?= $arguments2[39] ?></button></a></div>
  <div class="p-2"><a href="gestioneRisorsa.php?id_camera=<?=$arguments2[40] ?>"><button type="button" class="btn btn-info<?php if(in_array($arguments2[40], $arguments)) echo 'btn btn-danger' ?>"><?= $arguments2[40] ?></button></a></div>
  <div class="p-2"><a href="gestioneRisorsa.php?id_camera=<?=$arguments2[41] ?>"><button type="button" class="btn btn-primary<?php if(in_array($arguments2[41], $arguments)) echo 'btn btn-danger' ?>"><?= $arguments2[41] ?></button></a></div>
  <div class="p-2"><a href="gestioneRisorsa.php?id_camera=<?=$arguments2[54] ?>"><button type="button" class="btn btn-success<?php if(in_array($arguments2[54], $arguments)) echo 'btn btn-danger' ?>"><?= $arguments2[54] ?></button></a></div>
  <div class="p-2"><a href="gestioneRisorsa.php?id_camera=<?=$arguments2[55] ?>"><button type="button" class="btn btn-info<?php if(in_array($arguments2[55], $arguments)) echo 'btn btn-danger' ?>"><?= $arguments2[55] ?></button></a></div>
  <div class="p-2"><a href="gestioneRisorsa.php?id_camera=<?=$arguments2[56] ?>"><button type="button" class="btn btn-primary<?php if(in_array($arguments2[56], $arguments)) echo 'btn btn-danger' ?>"><?= $arguments2[56] ?></button></a></div>
  </nav>
  </div>
  
  <!--</div>-->
  <!--<div class="col-1 ">-->
  <div class=" col bg-dark d-flex align-items-start flex-column bd-highlight mb-3  " >
  <nav class="nav flex-column text-center">
  <div class="p-2"><a class="nav-pills active" aria-current="page" href="#">Camere<br>Triple MX</a></div>
  <div class="p-2"><a href="gestioneRisorsa.php?id_camera=<?=$arguments2[12] ?>"><button type="button" class="btn btn-success<?php if(in_array($arguments2[12], $arguments)) echo 'btn btn-danger' ?>"><?= $arguments2[12] ?></button></a></div>
  <div class="p-2"><a href="gestioneRisorsa.php?id_camera=<?=$arguments2[13] ?>"><button type="button" class="btn btn-info<?php if(in_array($arguments2[13], $arguments)) echo 'btn btn-danger' ?>"><?= $arguments2[13] ?></button></a></div>
  <div class="p-2"><a href="gestioneRisorsa.php?id_camera=<?=$arguments2[14] ?>"><button type="button" class="btn btn-primary<?php if(in_array($arguments2[14], $arguments)) echo 'btn btn-danger' ?>"><?= $arguments2[14] ?></button></a></div>
  <div class="p-2"><a href="gestioneRisorsa.php?id_camera=<?=$arguments2[27] ?>"><button type="button" class="btn btn-success<?php if(in_array($arguments2[27], $arguments)) echo 'btn btn-danger' ?>"><?= $arguments2[27] ?></button></a></div>
  <div class="p-2"><a href="gestioneRisorsa.php?id_camera=<?=$arguments2[28] ?>"><button type="button" class="btn btn-info<?php if(in_array($arguments2[28], $arguments)) echo 'btn btn-danger' ?>"><?= $arguments2[28] ?></button></a></div>
  <div class="p-2"><a href="gestioneRisorsa.php?id_camera=<?=$arguments2[29] ?>"><button type="button" class="btn btn-primary<?php if(in_array($arguments2[29], $arguments)) echo 'btn btn-danger' ?>"><?= $arguments2[29] ?></button></a></div>
  <div class="p-2"><a href="gestioneRisorsa.php?id_camera=<?=$arguments2[42] ?>"><button type="button" class="btn btn-success<?php if(in_array($arguments2[42], $arguments)) echo 'btn btn-danger' ?>"><?= $arguments2[42] ?></button></a></div>
  <div class="p-2"><a href="gestioneRisorsa.php?id_camera=<?=$arguments2[43] ?>"><button type="button" class="btn btn-info<?php if(in_array($arguments2[43], $arguments)) echo 'btn btn-danger' ?>"><?= $arguments2[43] ?></button></a></div>
  <div class="p-2"><a href="gestioneRisorsa.php?id_camera=<?=$arguments2[44] ?>"><button type="button" class="btn btn-primary<?php if(in_array($arguments2[44], $arguments)) echo 'btn btn-danger' ?>"><?= $arguments2[44] ?></button></a></div>
  <div class="p-2"><a href="gestioneRisorsa.php?id_camera=<?=$arguments2[57] ?>"><button type="button" class="btn btn-success<?php if(in_array($arguments2[57], $arguments)) echo 'btn btn-danger' ?>"><?= $arguments2[57] ?></button></a></div>
  <div class="p-2"><a href="gestioneRisorsa.php?id_camera=<?=$arguments2[58] ?>"><button type="button" class="btn btn-info<?php if(in_array($arguments2[58], $arguments)) echo 'btn btn-danger' ?>"><?= $arguments2[58] ?></button></a></div>
  <div class="p-2"><a href="gestioneRisorsa.php?id_camera=<?=$arguments2[59] ?>"><button type="button" class="btn btn-primary<?php if(in_array($arguments2[59], $arguments)) echo 'btn btn-danger' ?>"><?= $arguments2[59] ?></button></a></div>
</nav>
</div>
<!-------------->
<div id='contenitore' class='container-container-fluid'>
<div class="row ">
<div id="areaCentrale" class="col-6 container-fluid">
<div style='border:5px solid green; height:550px;'> <!--div1-->
      <div style='background-color:#d5e2ef;'>	  <!--div2-->
	  <!--<form>-->
		<div class="row"> <!--div3-->
		<div class="col"> <!--div4-->
		<label><h6>Cognome</h6></label>
		<input type="text" readonly class="form-control" placeholder="Last name" aria-label="Last name" name ="cognome" id="cognome" value="<?= $cognome ?>">
		</div>
		<div class="col">
		<label><h6>Nome</h6></label>
		<input type="text" readonly class="form-control" placeholder="First name" aria-label="First name" name ="nome" id="nome" value="<?= $nome ?>">
		</div>		
		<div class="col">
		<label><h6>Pax</h6></label>
		<input type="text" readonly class="form-control-sm" placeholder="Pax" aria-label="Pax" name ="pax" id="pax" value="<?= $adulti ?>">
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
		<!--<a role="button" class ='btn btn-success' data-bs-toggle="modal" href="#exampleModalToggle">Addebiti</a>-->
		<!--<button class="btn btn-secondary" onclick ="apriModal();" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">Addebita</button>-->
		<!--<button type="button" data-bs-toggle="modal" data-bs-target="modalAddebiti" onclick="apriModal();">Launch modal</button>-->
		<!--<button class="btn btn-secondary" data-bs-toggle="modal" onclick="apriModal();" type="button">Addebita</button>-->
		<!--<input class="btn btn-secondary" type="button" value="Addebito">-->
		<input class="btn btn-secondary" type="button" value="Dividi conto">
		<input class="btn btn-secondary" type="button" value="Storna addebito">
		<input class="btn btn-secondary" type="button" value="Trasferisci addebito">
		<input class="btn btn-primary" type="button" value="vai al check-out">
		<input class="btn btn-success" type="submit" value="Salva">
		<!--</form>-->
        <button type="button" class="btn btn-danger" aria-label="Close">Chiudi</button>
		<!--<button type="button" class="btn-close" aria-label="Close"></button>-->
      </div>
    </div>

<!-- Modal -->
<!--<div class="modal fade" id="mb" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" >
    <div class="modal-content" style='border:5px solid green; height:550px;'>
      <div class="modal-header" style='background-color:#d5e2ef;'>
	    <form method="POST">
          <div class="modal-body">	
			<table class="table table-striped">
				<thead>
					<tr><th>Data</th><th>Reparto</th><th>Descrizione</th><th>Quantità</th><th>Prezzo Unità</th><th>Prezzo totale</th></tr>
				</thead>
				<tbody>
									 
				</tbody>
			</table>
			<div id='totale'></div>
         </div>
      <div class="modal-footer" style='background-color:#d5e2ef;'>
		   <input class="btn btn-success" type="submit" value="Addebita" name="addebita">         
		</form>
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Chiudi</button>
      </div>
	  
    </div>
  </div>
 </div>
</div>-->
<!---->
</div>
</div>
</div>