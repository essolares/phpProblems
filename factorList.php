<?php

function evalNumber($num)
{
  $j=0;
  $factor=array(); 
  for($i=1;$i<=$num;$i++)  
  {
    if($num%$i==0)
    { 
      $j++;
      $factor[$j]=$i;
    }
  }
  return $factor;
}

$n1 = 333;
echo implode(evalNumber($n1),"-");
