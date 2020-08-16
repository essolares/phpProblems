<?php

function evalNumber($numero)
{
  $prime = true;
  if ($numero == 1){
    return true;
  }else {
    for ($i=2;$i<$numero;$i++)
    {
      if (fmod($numero,$i) == 0)
      {
        $prime = false;
        break;
      }
    }
  }
  return $prime;
}

$nume = 25;
echo var_dump(evalNumber($nume));
