<?php
	//变量为false的情况
	$a = 0;
	if($a == false){
		echo "变量a转为布尔类型";
	}
	$b =0.0;
	if($b == false) echo "<br>变量b转为布尔类型";
	$c = "";
	if($c ==false)echo "<br>变量c转为布尔类型";
	$e = "0";
	if($e ==false)echo "<br>变量e转为布尔类型";
	$f = NULL;
	if($f ==false)echo "<br>变量f转为布尔类型";
	$d = array();
	if($d ==false)echo "<br>变量d转为布尔类型";
	/////true
	$var1 = 3;
	if($var1 ==true)echo "<br>变量var1转为布尔类型true";
	$var2 = "32432";
	if($var2 ==true)echo "<br>变量var2转为布尔类型";
	$var3 = "hello";
	if($var3 ==true)echo "<br>变量var3转为布尔类型";
	//强制类型转换
	$number1 = 0;
	$var4 = (boolean)$number1;
	var_dump($var4);
	$number2 = "abcd";
	$toNumber = (int)$number2;
	var_dump($toNumber);
	$number3 = "1234abcd1234";
	$toNumber2 = (int)$number3;
	var_dump($toNumber2);
	$number4 = 1234;
	$toNumber3 = (string)$number4;
	var_dump($toNumber3);
?>