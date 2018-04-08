<?php
	/*$rows = 10;
	$cols = 10;
	$border = 2;
	$color = 'green';*/
//функция отрисовки таблицы
		function drawTable($cols = 7, $rows = 7, $color = 'grey', $border = 1){
		static $count = 0;
		echo 'Таблица нарисована '.++$count. ' раз(а)';
		echo '<table border="'.$border.'" width="200">';
		for($tr = 1; $tr <= $rows; $tr++){
			echo '<tr>';
			for($td = 1; $td <= $cols; $td++){
				
				if($tr == 1 OR $td == 1) {							
					echo '<th style="background-color: '.$color.'">'.$tr*$td.'</th>';						
				} else {							
					echo '<td>'.$tr*$td.'</td>';														
				}						
			}
			echo '</tr>';
			
		}	
		echo '</table>';
		
	}

//создаем функцию отрисовки меню
	function drawMenu($menu, $vertical)
	{
		 foreach ($menu as $item)
		 	{ // $item - внутренний массив (это короткий foreach, когда нужны только значения ($item - Домой) )
		 		$style = '';
				if(!$vertical)
				{
					$style = ' style=" display: inline; margin-right: 15px;"';
				}
						echo "<ul>";
						echo "<li>";
						echo "<a href='{$item['href']}'>  {$item['link']}  </a>"; // аналог записи в html: <a href = 'index.php'> Домой </a>
						echo "</li>";
						echo "</ul>";
			}
	}
?>