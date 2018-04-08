<?php
	if($_SERVER['REQUEST_METHOD'] == "POST") {
		$cols = abs((int) $_POST['cols']);
		$rows = abs((int) $_POST['rows']); 
		$color = trim(strip_tags($_POST['color']));
	}
?>
<form action='<?php echo $_SERVER['REQUEST_URI'];?>' method="POST">
	<label>Количество колонок: </label><br />
	<input name='cols' type='text' value="" /><br />
	<label>Количество строк: </label><br />
	<input name='rows' type='text' value="" /><br />
	<label>Цвет: </label><br />
	<input name='color' type='text' value="" /><br /><br />
	<input type='submit' value='Создать' />
</form>
<!-- Таблица -->
			<!-- Таблица -->
			<table border='1' width="200" style = "text-align:center">
			<?php
				drawTable( $cols,$rows, $color, $border);
			?>
			</table>
			<!-- Таблица -->