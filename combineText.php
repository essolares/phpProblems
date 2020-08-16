<?php

function mergeStr($str1,$str2){
  $arr1 = str_split($str1);
  $arr2 = str_split($str2);
  $total = 0;
  $result = array();
  if (count($arr1) < count($arr2)){
    $total = count($str2);
  }else {
    $total = count($arr1);
  }
  echo $total;
  for ($i=0;$i<$total;$i++){
    if ($i < count($arr1)){
      $result[] = $arr1[$i];
    }
    if ($i < count($arr2)){
      $result[] = $arr2[$i];
    }
  }

  //$tot = array_merge($arr1,$arr2);
  return $result;
}

$str1= "JONHMACAWASA";
$str2 = "SMITHY";
echo implode(mergeStr($str1,$str2));
