<?php
$str1= [12,4,5,6,8,3,1];
$str2 = [1,4,7,9,0,10,51];
$str3 = [1,4,7,9,0,10,5];

//ARRAY_DIFF - find difference elements
//var_dump(array_diff($str2,$str1,$str3));*/

//ARRAY FILTER - filter with callback function
/*var_dump(array_filter($str1,function($a) {
  return $a > 3;}));*/

//ARRAY_FLIP - change key for value
//print_r(array_flip($str1));

//ARRAY_INTERSECT - return elements in all the arrays
//print_r(array_intersect($str1,$str2,$str3));

//array_merge - Join arrays
//print_r(array_merge($str1,$str2,$str3));

//array_pop - return the last element
//print_r(array_pop($str1));

//array_push - add elements
/*array_push($str1,"19",58,true);
print_r($str1);*/

//array_reverse - reverse array_diff
//print_r(array_reverse($str1));

//array_search - return pos of the value serched
//echo (array_search(1,$str2));

//array_walk - change the array values defined by callback
/*$arr = array();
array_walk($str1,function($a) {
echo $a*2;});*/

//in_array - find quantity of elements in array
//echo in_array(3,$str1);
