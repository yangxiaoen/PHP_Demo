<?php
	$a = true;//true---->1
	$b = $a+1;
	echo "$b";
	echo "<br>";
	var_dump($b);//查看变量类型和输出的值
	$c = 1+"-1.5e2";//-1.5*10*10
	var_dump($c);
	$d = 1+"char";//数+字符串--->数
	var_dump($d);
	echo $d;
	echo "<br>";
	$e = 1+"char11";
	echo $e;
?>