<?php
//值传递
function demo(&$arg){//传递变量的地址
	$arg = 200;
}
$var = 100;
demo($var);
echo $var;
//数据类型（1.简单数据类型（）2.引用数据类型（类类型，数组））
?>