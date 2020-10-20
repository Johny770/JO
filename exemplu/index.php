<!DOCTYPE html>
<html>
<head>
	<title>Exemplu</title>
</head>
<body>
	<form action="index.php">
     <input type="" name="masa">
	</form>
	<?
	require "Animal.php";
	require "Caprioara.php";
	require "Lebada.php";
	require "Peste.php";
	$Caprioara = new Caprioara('Caprioara');
	echo $Caprioara->move().'<br>';
	echo $Caprioara->eat().'<br>';

	$Lebada = new Lebada('Lebada');
	echo $Lebada->move().'<br>';
	echo $Lebada->eat().'<br>';

	$Peste = new Peste('Peste');
	echo $Peste->move().'<br>';
	echo $Peste->eat().'<br>';
	?>

</body>
</html>