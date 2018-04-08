<?php
	require "inc/lib.inc.php";
	require "inc/data.inc.php";
	//Инициализация заголовков страницы
	$title = 'Сайт нашей школы';
	$header = "$welcome, Гость!";
	$id = strtolower(strip_tags(trim($_GET['id'])));
	switch($id)
	{
		case 'about':
			$title = 'О сайте';
			$header = 'О нашем сайте';
			break;
		case 'contact':
			$title = 'Контакты';
			$header = 'Обратныя связь';
			break;
		case 'table':
			$title = 'Таблица умножения';
			$header = 'Таблица умножения';
			break;
		case 'calc':
			$title = 'Он-лайн калькулятор';
			$header = 'Калькулятор';
			break;
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
	<head>
		<title><?php echo $title ?></title>
		<meta http-equiv="content-type"
			content="text/html; charset=windows-1251" />
		<link rel="stylesheet" type="text/css" href="style.css" />
	</head>
	<body>

		<div id="header">
			<!-- Верхняя часть страницы -->
				<?php
					require "inc/top.inc.php";
				?>
			<!-- Верхняя часть страницы -->
		</div>

		<div id="content">
			<!-- Заголовок -->
			<h1><?php echo $header ?></h1>
			<!-- Заголовок -->
			<!-- Область основного контента -->
				<?php
					//require "inc/index.inc.php";
				switch($id)
				{
					case 'about' : include 'about.php'; break;
					case 'contact' : include 'contact.php'; break;
					case 'table' : include 'table.php'; break;
					case 'calc' : include 'calc.php'; break;
					default: include 'inc/index.inc.php';

				}
				?>
			<!-- Область основного контента -->
		</div>
		<div id="nav">
			<!-- Навигация -->
			<?php
				require "inc/menu.inc.php";
			?>
			<!-- Навигация -->
		</div>
		<div id="footer">
			<!-- Нижняя часть страницы -->
			<?php
				require "inc/bottom.inc.php";
			?>
			<!-- Нижняя часть страницы -->
		</div>
	</body>
</html>