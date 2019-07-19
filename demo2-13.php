<?php
	//通过系统提供的回调函数来调用自定义函数
	function fun($msg1,$msg2){
		echo "msg1= ".$msg1;
		echo "---------<br>";
		echo "msg2 = ".$msg2;
	}
	//第一个参数--->函数的名称
	//第二个参数--->函数参数具体的值
	call_user_func_array("fun", array('你好','中国'));
?>