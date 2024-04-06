<?php
function pdoQuery($pdo, $sql, $arguments=null){
	if(!$arguments){
		return $pdo->query($sql);
	}
	$stmt = $pdo->prepare($sql);
	$stmt->execute($arguments);
	return $stmt;
}
function convalidaNumeri($num, $min, $max){
	$options = ['options'=>['min_range'=>$min, 'max_range'=>$max]];
	return(filter_var($num, FILTER_VALIDATE_INT, $options));
}
function convalidaTesto($text, $min, $max){
	return(mb_strlen($text) >= $min and mb_strlen($text) <= $max);
}
function resistenzaPassword($password){
	if(mb_strlen($password) >= 8 && preg_match('/[A-Z]/', $password) && preg_match('/[a-z]/', $password) && preg_match('/[0-9]/', $password) && preg_match('/[\'\/~`\!@#\$%\^&\*\(\)_\-\+=\{\}\[\]\|;:"\<\>,\.\?\\\]/', $password)){
		return true;
	}else{
		return false;
	}
}
function convertDate($data){
  $time = strtotime($data);
  $newFormat = date('d-m-Y',$time);
  echo $newFormat;
}
?>
<script>
function convertDate(data){	
	let convertData = new Date(data);
	let newData = convertData.toLocaleDateString();
	return newData;
}
</script>