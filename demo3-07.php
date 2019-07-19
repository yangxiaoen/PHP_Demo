<?php
	//web服务器
	//全局变量数组--->用户访问
	//$_SERVER数组--->web服务器的信息
	foreach ($_SERVER as $key => $value) {
		echo '$_SERVER['.$key.']='.$value.'</br>';
	}
	echo $_SERVER['HTTP_HOST'];
?>