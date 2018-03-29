<?php
$z = array("a"=>rand(2,5),"b"=>rand(6,10));
$x=(int)$z[a];
echo $z[a].'<br>';
echo $z[b].'<br>';
$ymin=3*($x*$x)+$x-4;
$ymax=3*($x*$x)+$x-4;
for(;$x<=(int)$z[b];$x++){
	
	$y = 3 * ($x * $x) + $x - 4;
	if ($y < $ymin) {
			$ymin = $y;
		}
		if ($y > $ymax) {
			$ymax = $y;
		}
	
}
echo $ymin . "<br>" . $ymax;
?>