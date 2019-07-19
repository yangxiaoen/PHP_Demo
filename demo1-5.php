<?php
	$a = "world";
	echo "hello,{$a}";//另一种变量调用的形式
	echo "hello,{ $a}";//花括号会被当成字符串
	echo "hello,${a}";
?>