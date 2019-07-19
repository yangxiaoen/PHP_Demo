<?php
	$sum = 0;
	//2+4+6+...+100
	for($i=1;$i<=100;$i++){
		if($i%2 ==1){
			continue;
		}
		$sum+=$i;
	}
	echo "sum = ".$sum;
?>