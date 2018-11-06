<!DOCTYPE html>
<html>
	<head>
		<title>Флажки</title>
	</head>
	<body>
		<form method="post">		
				<?php
				$arr = file('list.txt');
				foreach($arr as $key=>$value){
				echo $value;
				echo '<input type="checkbox" name="chkbox[]" value="' . $value . '">';
			}
			?>
			<input type="submit" value="Отправить">
		</form>
	</body>
	</html>
	<?php
	$data = $_POST['chkbox'];
	var_dump($data);
	foreach ($data as $key => $value) {
		
	}