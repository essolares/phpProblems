<!DOCTYPE html>
<html>
<body>

<?php

function fibonacii($total){
	$lista = array();
	if ($total==0){
    	$lista[] = 0;
    }else if($total==1) {
		$lista[] = 1;
	}else{
      $lista[0]=0;
      $lista[1]=1;
      for ($n=1;$n<$total;$n++){     
          $lista[]=($lista[$n] + $lista[$n-1]);
      }
    }
          return $lista;
}

$total = 1;
$fib = fibonacii($total);
echo implode(" ",$fib);
?>

</body>
</html>
