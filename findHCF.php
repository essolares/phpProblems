<?php

function evalNumber($number1,$number2)
{
  $min=0;
  if ($number1 < $number2){
    $min = $number1;
  }else {
    $min = $number2;
  }
  for ($i=$min;$i>1;$i--){
    if (($number1%$i) == 0 && ($number1%$i == 0)){
      return $i;
    }
  }
}

$n1 = 333;
$n2 = 222;
echo evalNumber($n1,$n2);
