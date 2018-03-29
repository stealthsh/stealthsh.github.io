<?php
		$a = rand (1,10);// случайное число
		$b = $a + rand (1,5);// случайное число
		echo $a.'<br>';
		echo $b.'<br>';
		$x = $a;
		$ymax = 3 * $x * $x + $x - 4;
		$ymin = 3 * $x * $x + $x - 4;
	while($x<=$b)
	{
		$y = 3 * $x * $x + $x - 4;
		if ($y < $ymin) {
			$ymin = $y;
		}
		if ($y > $ymax) {
			$ymax = $y;
		}

		$x=$x+0.5;
			
	}
		echo $ymax.'<br>'.$ymin
?>