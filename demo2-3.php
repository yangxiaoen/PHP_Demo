<?php
//在函数中的局部变量
	function demo($one){
		$two = 100;
		echo "函数内部执行语句：".($one+$two);
	}
	demo(200);
	echo "函数外部执行语句:".($one+$two);
?>