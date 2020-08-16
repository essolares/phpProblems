<?php

function bubbleSort($arr)
{
  $narr = array();
  for ($i=0;$i<count($arr);$i++){
    for ($j=0;$j<count($arr)-1;$j++){
      if ($arr[$j]>$arr[$j+1]){
        $tmp = $arr[$j];
        $arr[$j] = $arr[$j+1];
        $arr[$j+1] = $tmp;
      }
    }
  }
  foreach ($arr as $val){
    echo $val . "-";
  }
}

$numbers = array(12,23,45,20,5,6,134,17,9,56,99);
bubbleSort($numbers);
