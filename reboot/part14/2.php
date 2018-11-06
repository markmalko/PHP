<!DOCTYPE html>
<html>
	<head>
		<title>Расстояние между двумя точками</title>
	</head>
	<body>
		<form method="post">
			<input type="text" name="x" value="x">
			<input type="text" name="y" value="y">
			<input type="submit" value="Рассчитать">
		</form>
	</body>
<?php
if(empty($_POST['x']) || empty($_POST['x'])){
	echo 'Заполните все поля';
}elseif(!is_numeric($_POST['x']) || !is_numeric($_POST['y'])){
	echo 'Введите числа';
}else{
	$x = $_POST['x'];
$y = $_POST['y'];
$distance = $y - $x;
echo $distance;
}
