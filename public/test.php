<?php 

function randomString($lenght){
	$str = "";
	$characters = array_merge(range('A', 'Z'), range('a', 'z'), range('0', '9'));
	$max = count($characters) - 1;
	for($i = 0; $i < $lenght; $i++){
		$rand = mt_rand(0, $max);
		$str .= $characters[$rand];
	}
	return $str;
}
if(isset($_POST['Gen'])){
	$len = $_POST['lenght'];
	$result = randomString(256);
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post">
		<input type="submit" name="Gen" value="Generate"> 
		<br>
		<br>
		<textarea name="Generated" rows=5 cols = 60 readonly="enabled"> <?php echo $result; ?></textarea>
	</form>
</body>
</html>