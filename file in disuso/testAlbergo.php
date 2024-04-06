 <?php
			$host="localhost";
			$user="root";
			$psw="vanigliaecacao";
			$nome_db="albergo";
			$myConn= mysqli_connect($host,$user,$psw,$nome_db);
				if(mysqli_connect_errno()){
				echo "connessione non riuscita".die(mysqli_connect_error());
				}
				$query = "SELECT prodotto,prezzo FROM descrizione_addebito";
				$result = mysqli_query($myConn,$query);
				if(mysqli_connect_errno()){
				echo "connessione non riuscita".die(mysqli_connect_error());
					}
				if(mysqli_num_rows($result)!=0){	
					echo "<div><table border='1' width='100%'>
				<thead>
					<tr><td>PRODOTTI</td></tr>
				</thead>
				<tbody>
				<tr>
					<td>Prodotto</td>
					<td>Prezzo</td>
				</tr>"; 
				while($row = mysqli_fetch_array($result,MYSQLI_BOTH)){ 
					$prodotto=$row['prodotto'];
					$prezzo=$row['prezzo'];
					echo "
					  <tr>
					<td>$prodotto</td>
					<td>$prezzo</td>";
					}
					echo "</tr>";
					echo "</tbody>";
					echo "</table>";
					echo "</div>";
						}else{
					echo "nessun dato";
						}
?>