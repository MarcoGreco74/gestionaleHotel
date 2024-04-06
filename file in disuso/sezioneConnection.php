<?php
$host="localhost";
$user="root";
$psw="vanigliaecacao";
$nome_db="albergo";
$myConn= mysqli_connect($host,$user,$psw,$nome_db);
	if(mysqli_connect_errno()){
	echo "connessione non riuscita".die(mysqli_connect_error());
}
?>