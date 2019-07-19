<?php
	$gread = 75;
	if($gread>80) {
		echo "优秀";
	}elseif ($gread>70) {
		echo "良好";
	}elseif ($gread>60) {
		# code...
		echo "合格";
	}else{
		echo "不合格";
	}
?>