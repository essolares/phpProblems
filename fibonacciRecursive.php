<!DOCTYPE html>
<html>
<body>

<?php

function fibonacci($total){
	if ($total == 0) {
    	return 0;
    }else if($total == 1) {
    	return 1;
    }else {
    	return fibonacci($total-1) + fibonacci($total-2);
    }
	
}

$total = 10;
for ($n=0;$n<=$total;$n++){
	echo fibonacci($n) ."-";
}


?>

</body>
</html>
