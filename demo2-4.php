<?php
	$one = 200;//全局变量
	$two = 300;
	function demo(){
		global $one,$two;//在函数的内部可以使用全局变量
		echo "运算结果为：".($one+$two);//局部变量
	}
	function demo2(){
		$sum = $GLOBALS['one']+$GLOBALS['two'];
		echo "运算结果为：".($sum);
	}	
	//demo();
	demo2();
?>