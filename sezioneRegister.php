<?php
session_start();
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);
///////////////
require('sezioneConnection.php');
if(isset($_POST['register'])){
	$myUser = mysqli_real_escape_string($myConn, $_POST['myUser']);
	$myPassword = mysqli_real_escape_string($myConn, $_POST['myPassword']);
	$remember= $_POST['remember'];
	if(empty($myUser) || empty($myPassword)){
		echo "Compila i campi richiesti !"."<br>";
	}else{
		htmlspecialchars($myUser);
		htmlspecialchars($myPassword);
		$queryVer = "SELECT id_utente FROM utente WHERE username = '".$myUser."'";
		$resultVer = mysqli_query($myConn,$queryVer);
		if(mysqli_num_rows($resultVer) > 0){
			echo "user already exists";
		}else{
			$passHash =hash('sha256',$myPassword);
			$queryIns = "INSERT INTO utente (id_utente,nome,cognome,username,password,livello_accesso) VALUES (NULL,'','','$myUser','$passHash',1)";
			if(mysqli_query($myConn,$queryIns)){
				$_SESSION['myUser']= $myUser;
			header("Location:sezioneSession.php");
			}else{
				echo "There was a problem ! Try again !";
			}
		}
	}
}	
?>
<!doctype html>
<html>
<head>
<title>layout</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial scale=1.0">
<link href="../bootstrap/bootstrap-grid.css" rel="stylesheet"></link>
<link href="../bootstrap/bootstrap.min.css" rel="stylesheet"></link>
<link href="../bootstrap/bootstrap.css" rel="stylesheet"></link>
<script src="bootstrap.js"></script>
<style>
	body {
		margin: 0;
		background-color:#d3b6d0;
		align-content:center;
		}
	.form-control{
		width:400px;
	}
</style>
</head>
<body>
	<form method="POST">
  <!-- Email input -->
  <div class="form-outline mb-4">
    <input type="text" name='myUser' id="form2Example1" class="form-control" />
    <label class="form-label" for="form2Example1">Your user</label>
  </div>
  <!-- Password input -->
  <div class="form-outline mb-4">
    <input type="password" name ='myPassword' id="form2Example2" class="form-control" />
    <label class="form-label" for="form2Example2">Password</label>
  </div>
  <!-- 2 column grid layout for inline styling -->
  <div class="row mb-4">
    <div class="col d-flex justify-content-center">
      <!-- Checkbox -->
      <div class="form-check">
        <input class="form-check-input" type="checkbox" name='remember' value="" id="form2Example31" checked />
        <label class="form-check-label" for="form2Example31"> Remember me </label>
      </div>
    </div>
    <div class="col">
      <!-- Simple link -->
      <a href="#!">Forgot password?</a>
    </div>
  </div>
  <!-- Submit button -->
  <input type="submit" name ='register' class="btn btn-primary btn-block mb-4" value="Register">
</form>
</body>
</html>
