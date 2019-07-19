<?php
	//数组中常用的操作数组的函数
	//each()函数：需要传递一个数组作为参数，返回数组中当前元素的键值对，并且向后移动数组指针到下一个元素
	$contact6 = array('编号' =>1 ,"姓名"=>"张三",
	"公司"=>"A公司" ,"地址"=>"太原市");
	$elem1 = each($contact6);
	echo "---".$elem1[0];
	print_r($elem1);
	$elem2 = each($contact6);
	print_r($elem2);
	//list()函数：用一步操作给一组变量赋值。
	$contact = array("aaa","bbb","ccc");
	list($elem1,$elem2,$elem3) = $contact;
	echo "elem1=".$elem1." elem2=".$elem2." elem3=".$elem3."<br>";
	list($elem1,,$elem3) = $contact;
	echo "elem1=".$elem1." elem3=".$elem3;
	list(,,$elem3) = $contact;
	
?>