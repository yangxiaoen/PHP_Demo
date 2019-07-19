<?php
	//通过函数进行过滤，在0-100之间，通过自定义的条件过滤不需要的数字
	//变量函数和回调函数
	function filter($fun){//过滤器
		for($i = 0;$i<=100;$i++){
			if($fun($i)){
				continue;
			}
			echo "$i"." ";
		}
	}
	//对数字具体的要求,打印出0-100之间非3的倍数
	function one($num){
		return $num%3==0;
	}
	//对数字的要求2，过滤掉0-100之间非回文数
	function two($num){
			return $num==strrev($num);//判断一个数是不是回文数
		}
	filter("one");//回调函数的操作
	echo "-----------------<br>";
	filter("two");
?>