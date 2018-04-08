<?php
	//Установка локали и выбор значения даты
	setlocale(LC_ALL, "russian");//установка русской локали
	$day = strftime('%d');//инициилизация переменной день
	$mon = strftime('%B');//инициилизация переменной месяц
	$year = strftime('%Y');//инициилизация переменной год
	//установка русских символов для месяца
	$day = iconv("windows-1251", "UTF-8", $day);
	$mon = iconv("windows-1251", "UTF-8", $mon);
	//объявляем константу
	define('COPYRIGHT', 'Супер Мега Веб-мастер');
	// выводит разное приветствие в зависимости от времени суток
/*
*Получаем текущий час в виде строки от 00 до 23
*и приводим строку к целому числу от 00 до 23
*/
$hour = (int)strftime('%H');
$welcome = '';//Иницилизируем переменную welcome
if ($hour >= 0 and $hour <6)
{
	 $welcome = 'Доброй ночи';
}

elseif ($hour >=6 and $hour <12)
{
	$welcome = 'Доброе утро';
}

elseif ($hour >=12 and $hour <=18)
{
	$welcome = 'Добрый день';
}

elseif ($hour >=18 and $hour <=23)
{
	$welcome = 'Добрый вечер';
}

else 
{
	$welcome = 'Доброй ночи';
}
?>
<?php
//создаем ассоциативній массив для создания левого динамического меню
	$leftMenu = array
	(
		array('link'=>'Домой', 'href'=>'index.php'),
		array('link'=>'О нас', 'href'=>'index.php?id=about'),
		array('link'=>'Контакты', 'href'=>'index.php?id=contact'),
		array('link'=>'Таблица умножения', 'href'=>'index.php?id=table'),
		array('link'=>'Калькулятор', 'href'=>'index.php?id=calc')
	);
?>