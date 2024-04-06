<?php

?>
<!doctype html>
<html>
<head>
<title>Gestionale</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial scale=1.0">
<link href="../bootstrap/bootstrap.css" rel="stylesheet"></link>
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<link rel="stylesheet" href="css/all.css">
<script src="../bootstrap/bootstrap.js"></script>
<script src = "https://code.jquery.com/jquery-3.6.2.js"></script>
<style>
  body {
	margin: 0;
	background:linear-gradient(to top,blue,#abd8f4);
}
audio {
	display:none;
	}
	.HClogo {
	height:100px;
	width:150px;
	}
#calendar_container {
	width:250px;
	border:1px solid black;
	margin-top:80px;
}
.month {
background-color:brown;
font:bold 12px verdana;
color:white;
}
.daysofweek {
background-color:gray;
font:bold 12px verdana;
color:white;
}
.days {
font-size: 12px;
font-family:verdana;
color:black;
background-color: red;
padding: 2px;
}
.days #today{
font-weight: bold;
color: red;
}
ul {list-style-type: none;}
body {font-family: Verdana, sans-serif;
}
.month {
  padding: 70px 25px;
  width: 100%;
  background: #1abc9c;
  text-align: center;
}
.month ul {
  margin: 0;
  padding: 0;
}
.month ul li {
  color: white;
  font-size: 20px;
  text-transform: uppercase;
  letter-spacing: 3px;
}
.month .prev {
  float: left;
  padding-top: 10px;
}
.month .next {
  float: right;
  padding-top: 10px;
}
.weekdays {
  margin: 0;
  padding: 10px 0;
  background-color: #ddd;
}
.weekdays li {
  display: inline-block;
  width: 13.6%;
  color: #666;
  text-align: center;
}
.days {
  padding: 10px 0;
  background: #eee;
  margin: 0;
}
.days li {
  list-style-type: none;
  display: inline-block;
  width: 13.6%;
  text-align: center;
  margin-bottom: 5px;
  font-size:12px;
  color: #777;
}
.days li .active {
  padding: 5px;
  background: #1abc9c;
  color: white !important
}
/* Add media queries for smaller screens */
@media screen and (max-width:720px) {
  .weekdays li, .days li {width: 13.1%;}
}
@media screen and (max-width: 420px) {
  .weekdays li, .days li {width: 12.5%;}
  .days li .active {padding: 2px;}
}
@media screen and (max-width: 290px) {
  .weekdays li, .days li {width: 12.2%;}
}
img {
width:600px;
height:600px;
}
#totale {
	width:80px;
	height:35px;
	border: 2px solid grey;
	float:right;
	}
#camera {
	width:70px;
	height:25px;
	border: 2px solid grey;
	//float:right;
	background-color:white;
	}
</style>
</head>

<!--<body onmouseover='playAudio()'>-->
<body>
<audio controls id="myAudio">
<source src="../audio-video/01 Lazy River.mp3" type="audio/mpeg">
</audio>

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
		<!--<a class="nav-link" href="#"><img src='../immagini/stampa.jpg' class="img-thumbnail" style='width:30px; height:30px;' alt='Stampa'></a>-->
		<a class="nav-link" href="#"><i class="fa-sharp fa-regular fa-print"></i></a>
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
<!-- FINE COLLAPSE --> 
    </div>
  </div>
  </div>
  </div>
 <!-- FINE TOP BAR -->
 
<!-- CORPO -->
<div id='contenitore' class='container-container-fluid'>
<div class="row ">
<div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark col-2" style='height:800px;'>
    <!--<a href="" class="d-flex align-items-start mb-3 mb-md-0 me-md-auto text-white text-decoration-none">-->
      <svg class="bi me-2" ><use xlink:href="#bootstrap"/></svg>
      <span class="fs-4"><img src='../img/HotelCube.png' class='HClogo'></span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
      <li class="nav-item">
        <a href="#" class="nav-link active" aria-current="page">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#home"/></svg>
          Home
        </a>
      </li>
      <li>
        <a href="#" class="nav-link text-white">
          <svg class="bi me-2" width="10" height="10"><use xlink:href="#speedometer2"/></svg>
          Booking
        </a>
      </li>
      <li>
        <a href="javascript:testCKin();" class="nav-link text-white">
          <svg class="bi me-2" width="10" height="10"><use xlink:href="#table"/></svg>
          Check-in
        </a>
      </li>
	  <li>
        <a href="gestionaleWalkin.html" class="nav-link text-white">
          <svg class="bi me-2" width="10" height="10"><use xlink:href="#table"/></svg>
          Walk-in
        </a>
      </li>
      <li>
        <a href="#" class="nav-link text-white">
          <svg class="bi me-2" width="10" height="10"><use xlink:href="#grid"/></svg>
          Check-out
        </a>
      </li>
      <li>
        <a href="#" class="nav-link text-white">
          <svg class="bi me-2" width="10" height="10"><use xlink:href="#people-circle"/></svg>
          Gestione tariffe
        </a>
      </li>
	  <li>
        <a href="#" class="nav-link text-white">
          <svg class="bi me-2" width="10" height="10"><use xlink:href="#people-circle"/></svg>
          Tableau
        </a>
      </li>
	  <li>
        <a href="#" class="nav-link text-white">
          <svg class="bi me-2" width="10" height="10"><use xlink:href="#people-circle"/></svg>
          Prenotazioni 
        </a>
      </li>
	  <li>
        <a href="#" class="nav-link text-white">
          <svg class="bi me-2" width="10" height="10"><use xlink:href="#people-circle"/></svg>
          Arrivi
        </a>
      </li>
	  <li>
        <a href="sezioneAccess.php" class="nav-link text-white">
          <svg class="bi me-2" width="10" height="10"><use xlink:href="#people-circle"/></svg>
          Logout
        </a>
      </li>
    </ul>
<input type="date" name="begin" style='height:80px;' placeholder="dd-mm-yyyy" value="2022-09-02"    min="2022-09-01" max="2022-09-20">
<ul class="weekdays">
  <li>Mo</li>
  <li>Tu</li>
  <li>We</li>
  <li>Th</li>
  <li>Fr</li>
  <li>Sa</li>
  <li>Su</li>
</ul>
<ul class="days">  
  <li>1</li>
  <li>2</li>
  <li>3</li>
  <li>4</li>
  <li>5</li>
  <li>6</li>
  <li>7</li>
  <li>8</li>
  <li>9</li>
  <li><span class="active">10</span></li>
  <li>11</li>
  <li>12</li>
  <li>13</li>
  <li>14</li>
  <li>15</li>
  <li>16</li>
  <li>17</li>
  <li>18</li>
  <li>19</li>
  <li>20</li>
  <li>21</li>
  <li>22</li>
  <li>23</li>
  <li>24</li>
  <li>25</li>
  <li>26</li>
  <li>27</li>
  <li>28</li>
  <li>29</li>
  <li>30</li>
  <li>31</li>
</ul>
</div>

<!-- CAROUSEL -->
<div id="areaCentrale" class="col-6 container-fluid">
<div id="myCarousel" class="carousel slide" data-bs-ride="carousel" >
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>  
	  <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="4" aria-label="Slide 5"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="5" aria-label="Slide 6"></button>
	  <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="6" aria-label="Slide 7"></button> 
    </div>
    <div class="carousel-inner ">
      <div class="carousel-item active">
	  <img src="../img/adhHotel2.jpg" class="d-block w-100 " alt="...">
        <svg class="bd-placeholder-img bg-dark" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill=""/></svg>
        <div class="container">
          <div class="carousel-caption text-start">
            <h1>Prenota un evento</h1>
            <p>Prenota il tuo compleanno, il tuo anniversario, un'apericena, l'addio al celibato e vivi tutti i tuoi momenti speciali nella nostra area verde. </p>
            <p><a class="btn btn-lg btn-primary" href="#">Crea evento</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
	   <img src="../img/adhHotel.jpg" class="d-block w-100" alt="...">
        <svg class="bd-placeholder-img bd-dark" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill=""/></svg>
        <div class="container">
          <div class="carousel-caption">
            <h1>La nostra piscina.</h1>
            <p>Vuoi gustare un ottimo aperitivo seguito da una cena di classe a bordo piscina? Prenota ora il tuo tavolo al Ristorante Pizzeria.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Prenota ristorante</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
	  <img src="../immagini/Bologna1.jpg" class="d-block w-100" alt="...">
        <svg class="bd-placeholder-img bd-dark" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill=""/></svg>
        <div class="container">
          <div class="carousel-caption text-end">
            <h1>One more for good measure.</h1>
            <p>Some representative placeholder content for the third slide of this carousel.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
          </div>
        </div>
      </div>
	  
	  <div class="carousel-item">
	  <img src="../immagini/Bologna2.jpg" class="d-block w-100" alt="...">
        <svg class="bd-placeholder-img bd-dark" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill=""/></svg>
        <div class="container">
          <div class="carousel-caption text-end">
            <h1>One more for good measure.</h1>
            <p>Some representative placeholder content for the third slide of this carousel.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
          </div>
        </div>
      </div>
	  <div class="carousel-item">
	  <img src="../immagini/Bologna3.jpg" class="d-block w-100" alt="...">
        <svg class="bd-placeholder-img bd-dark" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill=""/></svg>
        <div class="container">
          <div class="carousel-caption text-end">
            <h1>One more for good measure.</h1>
            <p>Some representative placeholder content for the third slide of this carousel.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
          </div>
        </div>
      </div>
	  <div class="carousel-item">
	  <img src="../immagini/Bologna4.jpg" class="d-block w-100" alt="...">
        <svg class="bd-placeholder-img bd-dark" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill=""/></svg>
        <div class="container">
          <div class="carousel-caption text-end">
            <h1>One more for good measure.</h1>
            <p>Some representative placeholder content for the third slide of this carousel.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
          </div>
        </div>
      </div>
	  <div class="carousel-item">
	  <img src="../immagini/Bologna5.jpg" class="d-block w-100" alt="...">
        <svg class="bd-placeholder-img bd-dark" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill=""/></svg>
        <div class="container">
          <div class="carousel-caption text-end">
            <h1>One more for good measure.</h1>
            <p>Some representative placeholder content for the third slide of this carousel.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>

<div class="col bg-dark d-flex align-items-start flex-column bd-highlight mb-3">
<nav class="nav flex-column text-center ">
  <div class="p-2"><a class="nav-pills active" aria-current="page" href="#">Camere<br>Singole X</a></div>
  <div class="p-2"><a role="button"  onclick='apri();' class ='btn btn-success' data-bs-toggle="modal" href="#exampleModalToggle">1</a></div>
  <div class="p-2"><button type="button" class="btn btn-info">2</button></div>
  <div class="p-2"><button type="button" class="btn btn-primary">3</button></div>
  <div class="p-2"><button type="button" class="btn btn-success">16</button></div>
  <div class="p-2"><button type="button" class="btn btn-info">17</button></div>
  <div class="p-2"><button type="button" class="btn btn-primary">18</button></div>
  <div class="p-2"><button type="button" class="btn btn-success">31</button></div>
  <div class="p-2"><button type="button" class="btn btn-info">32</button></div>
  <div class="p-2"><button type="button" class="btn btn-primary">33</button></div>
  <div class="p-2"><button type="button" class="btn btn-success">46</button></div>
  <div class="p-2"><button type="button" class="btn btn-info">47</button></div>
  <div class="p-2"><button type="button" class="btn btn-primary">48</button></div>
  </nav>
  </div>
  <!--</div>-->
  <!--<div class="col-1 ">-->
  <div class=" col bg-dark d-flex align-items-start flex-column bd-highlight mb-3 " >
  <nav class="nav flex-column text-center">
  <div class="p-2"><a class="nav-pills active" aria-current="page" href="#">Camere<br>Doppie XX</a></div>
  <div class="p-2"><button type="button" class="btn btn-success">4</button></div>
  <div class="p-2"><button type="button" class="btn btn-info">5</button></div>
  <div class="p-2"><button type="button" class="btn btn-primary">6</button></div>
  <div class="p-2"><button type="button" class="btn btn-success">19</button></div>
  <div class="p-2"><button type="button" class="btn btn-info">20</button></div>
  <div class="p-2"><button type="button" class="btn btn-primary">21</button></div>
  <div class="p-2"><button type="button" class="btn btn-success">34</button></div>
  <div class="p-2"><button type="button" class="btn btn-info">35</button></div>
  <div class="p-2"><button type="button" class="btn btn-primary">36</button></div>
  <div class="p-2"><button type="button" class="btn btn-success">49</button></div>
  <div class="p-2"><button type="button" class="btn btn-info">50</button></div>
  <div class="p-2"><button type="button" class="btn btn-primary">51</button></div>
  </nav>
  </div>
 <!--</div>-->
  <!--<div class="col-1 ">-->
  <div class=" col bg-dark d-flex align-items-start flex-column bd-highlight mb-3 " >
  <nav class="nav flex-column text-center ">
  <div class="p-2"><a class="nav-pills active" aria-current="page" href="#">Camere<br>Doppie M</a></div>
  <div class="p-2"><button type="button" class="btn btn-success">7</button></div>
  <div class="p-2"><button type="button" class="btn btn-info">8</button></div>
  <div class="p-2"><button type="button" class="btn btn-primary">9</button></div>
  <div class="p-2"><button type="button" class="btn btn-success">22</button></div>
  <div class="p-2"><button type="button" class="btn btn-info">23</button></div>
  <div class="p-2"><button type="button" class="btn btn-primary">24</button></div>
  <div class="p-2"><button type="button" class="btn btn-success">37</button></div>
  <div class="p-2"><button type="button" class="btn btn-info">38</button></div>
  <div class="p-2"><button type="button" class="btn btn-primary">39</button></div>
  <div class="p-2"><button type="button" class="btn btn-success">52</button></div>
  <div class="p-2"><button type="button" class="btn btn-info">53</button></div>
  <div class="p-2"><button type="button" class="btn btn-primary">54</button></div>
  </nav>
  </div>
 <!--</div>-->
  <!--<div class="col-1 ">-->
  <div class=" col bg-dark d-flex align-items-start flex-column bd-highlight mb-3 " >
  <nav class="nav flex-column text-center">
  <div class="p-2"><a class="nav-pills active" aria-current="page" href="#">Camere<br>Triple XXX</a></div>
  <div class="p-2"><button type="button" class="btn btn-success">10</button></div>
  <div class="p-2"><button type="button" class="btn btn-info">11</button></div>
  <div class="p-2"><button type="button" class="btn btn-primary">12</button></div>
  <div class="p-2"><button type="button" class="btn btn-success">25</button></div>
  <div class="p-2"><button type="button" class="btn btn-info">26</button></div>
  <div class="p-2"><button type="button" class="btn btn-primary">27</button></div>
  <div class="p-2"><button type="button" class="btn btn-success">40</button></div>
  <div class="p-2"><button type="button" class="btn btn-info">41</button></div>
  <div class="p-2"><button type="button" class="btn btn-primary">42</button></div>
  <div class="p-2"><button type="button" class="btn btn-success">55</button></div>
  <div class="p-2"><button type="button" class="btn btn-info">56</button></div>
  <div class="p-2"><button type="button" class="btn btn-primary">57</button></div>
  </nav>
  </div>
  
  <!--</div>-->
  <!--<div class="col-1 ">-->
  <div class=" col bg-dark d-flex align-items-start flex-column bd-highlight mb-3  " >
  <nav class="nav flex-column text-center">
  <div class="p-2"><a class="nav-pills active" aria-current="page" href="#">Camere<br>Triple MX</a></div>
  <div class="p-2"><button type="button" class="btn btn-success">13</button></div>
  <div class="p-2"><button type="button" class="btn btn-info">14</button></div>
  <div class="p-2"><button type="button" class="btn btn-primary">15</button></div>
  <div class="p-2"><button type="button" class="btn btn-success">28</button></div>
  <div class="p-2"><button type="button" class="btn btn-info">29</button></div>
  <div class="p-2"><button type="button" class="btn btn-primary">30</button></div>
  <div class="p-2"><button type="button" class="btn btn-success">43</button></div>
  <div class="p-2"><button type="button" class="btn btn-info">44</button></div>
  <div class="p-2"><button type="button" class="btn btn-primary">45</button></div>
  <div class="p-2"><button type="button" class="btn btn-success">58</button></div>
  <div class="p-2"><button type="button" class="btn btn-info">59</button></div>
  <div class="p-2"><button type="button" class="btn btn-primary">60</button></div>
</nav>
</div>

</div>
</div>




<!-- FINE CORPO-->

<!--MODAL BOX 1 -->
<div class="modal fade" id="mb" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" >
    <div class="modal-content" style='border:5px solid green; height:550px;'>
      <div class="modal-header" style='background-color:#d5e2ef;'>
	  <button class="btn btn-secondary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">Addebita</button>
	  <form>
		<div class="row">
		<div class="col">
		<input type="text" class="form-control" placeholder="First name" aria-label="First name">
		</div>
		<div class="col">
		<input type="text" class="form-control" placeholder="Last name" aria-label="Last name">
		</div>
		<div class="col">
		<input type="text" class="form-control" placeholder="Camera" aria-label="Camera">
		</div>
		</div>
		
        <label><h5 class="modal-title" id="exampleModalLabel">Camera </h5></label>
		<div id='camera'>
		</div>
      </div>
      <div class="modal-body">
			<!--<h5 id="messaggioErrore">ciao</h5>-->	
			<table class="table table-striped">
				<thead>
					<tr><th>Data</th><th>Reparto</th><th>Descrizione</th><th>Quantità</th><th>Prezzo Unità</th><th>Prezzo totale</th></tr>
				</thead>
				<tbody>
					<tr><td></td><td></td><td></td><td></td><td></td><td></td></tr>
					<tr><td></td><td></td><td></td><td></td><td></td><td></td></tr>
					<tr><td></td><td></td><td></td><td></td><td></td><td></td></tr>
					<tr><td></td><td></td><td></td><td></td><td></td><td></td></tr>
					<tr><td></td><td></td><td></td><td></td><td></td><td></td></tr>
					<tr><td></td><td></td><td></td><td></td><td></td><td></td></tr>
					<tr><td></td><td></td><td></td><td></td><td></td><td></td></tr>
					<tr><td></td><td></td><td></td><td></td><td></td><td></td></tr>
					<tr><td></td><td></td><td></td><td></td><td></td><td></td></tr>
					<tr><td></td><td></td><td></td><td></td><td></td><td></td></tr>
					<tr><td></td><td></td><td></td><td></td><td></td><td></td></tr>
					<tr><td></td><td></td><td></td><td></td><td></td><td></td></tr>
					<tr><td></td><td></td><td></td><td></td><td></td><td></td></tr>
					<tr><td></td><td></td><td></td><td></td><td></td><td></td></tr>
					<tr><td></td><td></td><td></td><td></td><td></td><td></td></tr>
					<tr><td></td><td></td><td></td><td></td><td></td><td></td></tr>
				</tbody>
			</table>
			<div id='totale'></div>
      </div>
      <div class="modal-footer" style='background-color:#d5e2ef;'>
		<button class="btn btn-secondary" type="submit">Emetti documento fiscale</button>
		<input class="btn btn-secondary" type="button" value="Dividi conto">
		<input class="btn btn-secondary" type="button" value="Storna addebito">
		<input class="btn btn-success" type="submit" value="Salva">
		</form>
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Chiudi</button>
      </div>
    </div>
  </div>
</div>
<!-- FINE MODAL BOX1 -->
<!--MODAL BOX 2 -->
<div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content" style='border:5px solid green; height:550px;'>
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalToggleLabel2">Modal 2</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div id='prova' class="modal-body">
        Hide this modal and show the first with the button below.		
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal" onclick='apri();'>Salva</button>
      </div>
    </div>
  </div>
</div>
<!-- FINE MODAL BOX 2 -->


<script>
function testCKin(){
	let areaCentrale = document.getElementById('areaCentrale');
	let areaCarousel = document.getElementById('myCarousel');
	areaCarousel.innerHTML = '';
	let newDiv = document.createElement('div');
	newDiv.style.border = '5px solid blue';
	newDiv.style.backgroundColor = '#f2e6e6';
	//newDiv.innerHTML = 'test';
	newDiv.innerHTML ='<form class="row g-3 needs-validation" novalidate>\
  <div class="col-md-4">\
    <label for="validationCustom01" class="form-label">First name</label>\
    <input type="text" class="form-control" id="validationCustom01" value="Mark" required>\
    <div class="valid-feedback">\
      Looks good!\
    </div>\
  </div>\
  <div class="col-md-4">\
    <label for="validationCustom02" class="form-label">Last name</label>\
    <input type="text" class="form-control" id="validationCustom02" value="Otto" required>\
    <div class="valid-feedback">\
      Looks good!\
    </div>\
  </div>\
  <div class="col-md-4">\
    <label for="validationCustomUsername" class="form-label">Username</label>\
    <div class="input-group has-validation">\
      <span class="input-group-text" id="inputGroupPrepend">@</span>\
      <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>\
      <div class="invalid-feedback">\
        Please choose a username.\
      </div>\
    </div>\
  </div>\
  <div class="col-md-6">\
    <label for="validationCustom03" class="form-label">City</label>\
    <input type="text" class="form-control" id="validationCustom03" required>\
    <div class="invalid-feedback">\
      Please provide a valid city.\
    </div>\
  </div>\
  <div class="col-md-3">\
    <label for="validationCustom04" class="form-label">State</label>\
    <select class="form-select" id="validationCustom04" required>\
      <option selected disabled value="">Choose...</option>\
      <option>...</option>\
    </select>\
    <div class="invalid-feedback">\
      Please select a valid state.\
    </div>\
  </div>\
  <div class="col-md-3">\
    <label for="validationCustom05" class="form-label">Zip</label>\
    <input type="text" class="form-control" id="validationCustom05" required>\
    <div class="invalid-feedback">\
      Please provide a valid zip.\
    </div>\
  </div>\
  <div class="col-12">\
    <div class="form-check">\
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>\
      <label class="form-check-label" for="invalidCheck">\
        Agree to terms and conditions\
      </label>\
      <div class="invalid-feedback">\
        You must agree before submitting.\
      </div>\
    </div>\
  </div>\
  <div class="col-12">\
    <button class="btn btn-primary" type="submit">Submit form</button>\
  </div>\
</form>';
	areaCentrale.appendChild(newDiv);
	console.log('funzia');
	/*let url = 'testQuery.php';
	let response = await fetch(url);
	let richiestoObj = await response.json();
	console.log(richiestoObj);*/
}
/*
let demo1 = document.getElementById('demo1');
 let url = 'queryAjax1.php';
 let response = await fetch(url);
 let richiestoObj = await response.json();
 console.log(richiestoObj);
 $.each(richiestoObj, function(key,value){
	let datiRichiesti = richiestoObj[key];
	console.log(datiRichiesti);
	demo1.style.border = '2px solid red';
	demo1.style.backgroundColor = '#f2e6e6';
	demo1.innerHTML += ''+'<br>'+datiRichiesti;
	demo4.innerHTML += ''+'<br>'+datiRichiesti;
    });	


*/
/*function playAudio(){
let x=document.getElementById('myAudi'); // myAudio
x.load();
x.autoplay=true;
}
body.addEventListener('click', playAudio);*/
function apri(){
		const finestraErrore = new bootstrap.Modal('#mb');
		finestraErrore.show();
		
		
		/*let query = <?php
			$host="localhost";
			$user="root";
			$psw="vanigliaecacao";
			$nome_db="albergo";
			$myConn= mysqli_connect($host,$user,$psw,$nome_db);
				if(mysqli_connect_errno()){
				echo "connessione non riuscita".die(mysqli_connect_error());
				}else{
					echo 'ciao';
				}
				$query = "SELECT prodotto,prezzo FROM descrizione_addebito";
				$result = mysqli_query($myConn,$query);
				if(mysqli_connect_errno()){
				echo "connessione non riuscita".die(mysqli_connect_error());
					}
				if(mysqli_num_rows($result)!=0){	
					echo 'ehila';
				while($row = mysqli_fetch_array($result,MYSQLI_BOTH)){ 
					$prodotto=$row['prodotto'];
					$prezzo=$row['prezzo'];
					}
						}else{
					echo 'bye bye';
						}
		?>;*/
		
		}

	/*function apri2(){
		const finestraErrore = new bootstrap.Modal('#exampleModalToggle2');
		finestraErrore.show();
		}*/
//const dropdownElementList = document.querySelectorAll('.dropdown-toggle')
//const dropdownList = [...dropdownElementList].map(dropdownToggleEl => new bootstrap.Dropdown(dropdownToggleEl))	
</script>
</body>
</html>
<!--<a href="visualizzaCamera.php?idC=123" > 123 </a>-->
<!--<div><table border='1' width='100%'>
				<thead>
					<tr><td>PRODOTTI</td></tr>
				</thead>
				<tbody>
				<tr>
					<td>Prodotto</td>
					<td>Prezzo</td>
				</tr>
				<tr>
					<td>//$prodotto</td>
					<td>//$prezzo</td>;-->