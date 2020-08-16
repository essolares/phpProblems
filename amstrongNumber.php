<!DOCTYPE html>
<html>
<body>

<?php

function amstrong($total){
	$i = str_split($total);
    $tot = count($i);
    foreach ($i as $val){
    	$total = $total - (intval(pow($val,$tot)));
    }
    if ($total == 0){
        	return true;
    }
    return false;
}

$total = 371;
echo amstrong($total) ? 'true' : 'false';
?>

</body>
</html>
