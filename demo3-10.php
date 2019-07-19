<?php
	//array_values()返回数组中“值”对应的值
	$contact6 = array(
	'编号' =>1 ,
	"姓名"=>"张三",
	"公司"=>"A公司",
	"地址"=>"太原市" ,
	"Email" => "aaa@163.com");
	print_r(array_values($contact6));
	//array_keys()返回数组中“键”对应的值
	print_r(array_keys($contact6));
	//array_keys()可选参数的函数（数组的名称，要查询数据的“值”），返回对应的“键”
	print_r(array_keys($contact6,"张三"));
	$a = array(10,20,30,"10");
	print_r(array_keys($a,"10",false));//字符串数字和整型数字不区分
	print_r(array_keys($a,"10",true));//严格匹配
	?>