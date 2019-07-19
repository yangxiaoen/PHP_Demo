<?php
//静态变量
function demo(){
	static $a = 0;//a--->静态变量
	echo $a;
	$a++;
}
demo();
demo();
demo();
?>