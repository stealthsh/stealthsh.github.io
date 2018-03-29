<?php
//цикл для создания массива из случайных чисел
for($i=0; $i<10; $i++)
{
$random[$i] = rand(0,100);
}
//вывод слдержимого массива на экран
foreach($random as $value)
{
echo $value .'<br>';
}
$x=$random[0];
echo $x."<br>";
$ymin=3*($x*$x)+$x-4;
$ymax=3*($x*$x)+$x-4;

foreach ($random as $elem){
	
	$y = 3 * ($elem * $elem) + $elem - 4;
	if ($y < $ymin) {
			$ymin = $y;
		}
		if ($y > $ymax) {
			$ymax = $y;
		}
	
}
echo $ymin . "<br>" . $ymax;

?>