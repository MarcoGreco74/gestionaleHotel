<?php

?>
<div class="container-fluid" >
<!-- TOP BAR -->
<div class='container-container-fluid'>
<div class="row" style='background-color:#212529;'><!--se fixed-top il corpo sale e scompare del campo-->

    <div class="col-9 ">
<!-- NAV TABS -->
      <ul class="nav nav-tabs">
		<li class="nav-item">
		<a class="nav-link active" aria-current="page" href="#"><img src='../immagini/cannocchiale3.png' class="img-thumbnail" style='width:20px; height:20px;' alt='Ricerca'></a>
		</li>
		<li class="nav-item">
		<a class="nav-link" href="#"><img src='../immagini/fleg.png' class="img-thumbnail" style='width:30px; height:30px;' alt='Salva'></a>
		</li>
		<li class="nav-item">
		<a class="nav-link" href="#"><i class="fa-sharp fa-regular fa-print"></i></a>
		</li>
		<li class="nav-item">
		<a href="listaPreno.php" class="nav-link text-white">Lista prenotazioni</a>
		</li>
		<li class="nav-item">
		<a href="listaINcasa.php" class="nav-link text-white">In casa</a>
		</li>
		<li class="nav-item">
		<a href="listaPartenze.php" class="nav-link text-white">Partenze di oggi</a>
		</li>
		<li class="nav-item">
		<a href="listaArrivi.php" class="nav-link text-white">Arrivi di oggi</a>
		</li>
		<li class="nav-item">
		<a class="nav-link disabled">Gestione tariffe</a>
		</li>
	</ul>
<!-- FINE NAV TABS-->
    </div>
	
    <div class="col-3 ">
<!-- COLLAPSE--> 
	  <p><span style='color:white;'>Leggenda colori camere</span>
  <button class="btn btn-success" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample">
  </button>
  <button class="btn btn-info" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample">  
  </button>
  <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample3" aria-expanded="false" aria-controls="collapseExample">  
  </button>
  <button class="btn btn-danger" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample4" aria-expanded="false" aria-controls="collapseExample">  
  </button>
</p>
<div class="collapse" id="collapseExample1">
  <div class="card card-body">
    Camere con vista giardino.
  </div>
</div>
<div class="collapse" id="collapseExample2">
  <div class="card card-body">
    Camere con vista piscina
  </div>
</div>
<div class="collapse" id="collapseExample3">
  <div class="card card-body">
    Camere con vista mare
  </div>
</div>
<div class="collapse" id="collapseExample4">
  <div class="card card-body">
    Camere occupate
  </div>
</div>
<!-- FINE COLLAPSE --> 
    </div>
  </div>
  </div>
  </div>
