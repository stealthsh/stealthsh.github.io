<?php
  
    $f1 = 1;
    $f2 = 1;

$count = 1;
echo $f1.",";
echo $f2.",";

while($count<12)
{
  $f3 = $f1+$f2;

  echo $f3.",";
  $f1 = $f2;
  $f2 = $f3;
  $count = $count+1;
}
?>