<?php
//回调函数--》数据的异步处理
//变量函数---->
	function one($a,$b){
		return $a+$b; 
	}
	function two($a,$b){
		return $a*$a+$b*$b;
	}
	function three($a,$b){
		return $a*$a*$a+$b*$b*$b;
	}//泰勒公式
	$result = "three";
	echo "运算结果为：".$result(2,3);
?>