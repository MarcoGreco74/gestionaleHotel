<?php
session_start();
if($_SESSION['myUser']){
	header("Location:gestionaleAlbergo.php");
	}else{
		echo "<script>alert('errore')</script>";
		header("Location:sezioneAccess.php");
	}

?>