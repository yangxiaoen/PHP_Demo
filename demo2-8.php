<?php
//默认函数---》定义函数时，给函数的参数赋默认值
	function demo($name="张三",$age=20,$sex="男"){
		echo "我的名字是：".$name."年龄：".$age."性别：".$sex;
	}
	//demo("张三",34,"女");
 	//demo();
 	//demo("李四");
	demo("王五",60);


?>