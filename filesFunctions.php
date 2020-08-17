<?php

$str1 = "text <p>numbrer</p> 1";

//WRITE
$gestor = fopen('archived.txt', 'a+');
fwrite($gestor,$str1);
fclose($gestor);

//READ
$gestor = fopen('archived.txt', 'a+');
$lines = fread($gestor,filesize('archived.txt'));
fclose($gestor);
echo $lines;

