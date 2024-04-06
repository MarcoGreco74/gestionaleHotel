<?php
function pdoQuery($pdo, $sql, $arguments=null){
	if(!$arguments){
		return $pdo->query($sql);
	}
	$stmt = $pdo->prepare($sql);
	$stmt->execute($arguments);
	return $stmt;
}
?>