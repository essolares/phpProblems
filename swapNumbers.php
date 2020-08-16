<?php

function swapNumbers($num1,$num2)
{
  $tmp = 0;
  $tmp = $num1;
  $num1 = $num2;
  $num2 = $tmp;
  echo $num1 . " " .$num2;
}

$n1=20;
$n2 =30;
swapNumbers($n1,$n2);
