<?php

function findNumber($arr)
{
  $max = 0;
  foreach ($arr as $val){
    if ($val > $max){
      $max = $val;
    }
    echo $max . " ";
  }
  return $max;
}

$numbers = array(12,23,45,20,5,6,134,17,9,56,99);
echo var_dump(findNumber($numbers));
