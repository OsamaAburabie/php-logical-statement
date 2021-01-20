<!DOCTYPE html>
<html>
<head>
	<title>Eligible to Vote or not</title>
</head>
<body>
<form action="" method="post">
	Enter your age : 
	<input type="text" name="t1" placeholder="Enter a number">
	<br><input type="submit" name="submit" value="submit">
</form>
<?php 
if (isset($_POST['submit'])) {
	vote();
}
function vote()	{
	$a = $_POST['t1'];
	intval($a);
	if($a>=18){
	echo "You are Eligible for Vote";		
	}	
	else{
	echo "You are not Eligible for Vote";
	}
}
?>
</body>
</html>