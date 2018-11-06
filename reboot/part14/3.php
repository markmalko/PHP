<?php
	if(empty($_POST['text'])){
	echo 'Заполните все поля';
}else{
	$text = $_POST['text'];
	file_put_contents('content.txt', $text);
}
$str = file_get_contents('content.txt');
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Форма с текстом</title>
	</head>
	<body>
		<form method="post">
			<textarea name="text" value=<?php echo $str ?> cols='50' rows='10'></textarea>
			<br>
			<input type="submit" value="Текст принят">
		</form>
	</body>
	</html>
