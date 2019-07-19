<?php
	$a = NULL;
	//检查变量a是否属于空类型
	echo "检查变量a：".is_null($a);
	echo "<br>";
	$a = "hello";
	echo "+++++".is_string($a);
	echo "<br>";
	$b = 5;
	echo "检查变量b：".is_int($b);
	$c = 4.5;
	echo "<br>";
	echo "检查变量c：".is_float($c);
	echo "<br>";
	$d = '345.6';//判读是否是数字字符串或者判断是否是数字
	echo "检查变量d：".is_numeric($d);
	$e = true;
	echo "检查变量e:".is_bool($e);
?>