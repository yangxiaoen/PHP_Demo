<?php
	$contact6 = array(
	'编号' =>1 ,
	"姓名"=>"张三",
	"公司"=>"A公司",
	"地址"=>"太原市" ,
	"Email" => "aaa@163.com");
	//key() 取当前位置的key值，current()取当前位置的value值
	//指向数组的第一个元素，索引为0的元素
	echo "key = ".key($contact6)."==>"."value=".current($contact6);
	//next()将数组的指针移动到下一个位置
	next($contact6);
	next($contact6);
	echo "key = ".key($contact6)."==>"."value=".current($contact6);
	//end()将数组中的指针直接移动到数组的最后一个元素的位置
	end($contact6);
	echo "key = ".key($contact6)."==>"."value=".current($contact6);
	//prev()将数组指针向前移动一个元素的位置
	prev($contact6);
	echo "key = ".key($contact6)."==>"."value=".current($contact6);
	//reset()将数组指针无条件的指向数组元素第一个位置
	reset($contact6);
	echo "key = ".key($contact6)."==>"."value=".current($contact6);

?>