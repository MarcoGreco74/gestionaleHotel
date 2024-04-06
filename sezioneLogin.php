<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);
///////////////

if(isset($_POST['login'])){
	$myUser = mysqli_real_escape_string($myConn, $_POST['myUser']);
	$myPassword =$_POST['myPassword'];
	if(empty($myUser) || empty($myPassword)){
		echo "Compila i campi richiesti !"."<br>";
		}else{
		$passHash = hash('sha256',$myPassword);
		$queryLI="SELECT * FROM utente WHERE username='$myUser' AND password='$passHash' " ;
		$resultLI = mysqli_query($myConn,$queryLI);	
		if(mysqli_num_rows($resultLI)!=0){
		while($row=mysqli_fetch_array($resultLI,MYSQLI_BOTH)){	
			$myUser = $row['username'];
			$passHash = $row['password'];		
			$_SESSION['myUser'] = $myUser;
			$_SESSION['myPassword'] = $passHash;
			header("Location:sezioneSession.php");
				echo '<h1>login ok</h1>';
				}	
		}else{
				echo '<h1>login no</h1>';
				}
	}
}			
?>
