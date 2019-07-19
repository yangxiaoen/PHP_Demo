<?php
//改写程序
function filter($fun){//过滤器
		for($i = 0;$i<=100;$i++){
			if(call_user_func_array($fun,array($i))){
				continue;
			}
			echo "$i"." ";
		}
	}
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