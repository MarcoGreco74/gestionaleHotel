<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);
include_once 'connPDO.php';
?>
<?php include 'head.php'; ?>
<style>
<?php include "gestionaleCSS.css"; ?>
</style>
<?php include 'convalidaCkin.php'; ?>
<body>
<?php include 'hder.php'; ?>
<div id='contenitore' class='container-container-fluid'>
<div class="row ">
<?php include 'sidebarL.php'; ?>
<div id="areaCentrale" class="col-6 container-fluid">
<?= $message ?>
<table class="table table-success table-striped table-hover">
<form action="areaCKin.php" method='POST'>
<tr><td>Prenotazione : <input type="number" name="prenotazione" value="<?= $user['prenotazione'] ?>">
<span><?= $error['prenotazione'] ?></span></td></tr>
<tr><td>Cognome :<input type="text" name="cognome" value="<?= htmlspecialchars($user['cognome']) ?>">
<span><?= $error['cognome'] ?></span>
Nome :<input type="text" name="nome" value="<?= htmlspecialchars($user['nome']) ?>">
<span><?= $error['nome'] ?></span></td></tr>
<tr><td>Camera :<input type="number" name="camera" value="<?= $user['camera'] ?>">
<span><?= $error['camera'] ?></span>
Adulti:<input type="number" name="adulti" value="<?= $user['adulti'] ?>">
<span><?= $error['adulti'] ?></span></td></tr>
<tr><td>Periodo-dal : <input type="date" name="periodoIn" value="<?= $user['periodoIn'] ?>">
<span><?= $error['periodoIn'] ?></span>
Periodo-al :<input type="date" name="periodoOut" value="<?= $user['periodoOut'] ?>"></td></tr>
<!--<span><?= $error['periodoOut'] ?></span>-->
<tr><td>Tariffa : <input type="number" name="tariffa" value="<?= $user['tariffa'] ?>"></td></tr>
<!--<span><?= $error['tariffa'] ?></span>-->
<tr><td><input type="submit" name="invia" value="Check-in"></td></tr>
</form>
</table>
</div>
<?php include 'sidebarR.php'; ?>
</div>
</div>
</body>
</html>