<?php
	//数组的用法
	//数组的定义
	//1.直接赋值方式使用数组
	$contact1[0] = 1;//序号
	$contact1[1] = "张三";//姓名

	echo "编号：".$contact1[0]."<br>";
	echo "姓名：".$contact1[1]."<br>";

	//2.使用下标自定义方式，直接使用数组
	$contact2["编号"] = 2;
	$contact2["姓名"] = "李四";
	echo "编号：".$contact2["编号"]."<br>";
	echo "姓名：".$contact2["姓名"]."<br>";

	//3.混合形式
	$contact3[0] = 1;
	$contact3["编号"] = 1;
	$contact3[1] = "王五";
	$contact3[2] ="A公司";
	//4.省略数组下标
	$contact4[] = 1;
	$contact4[] = "赵六";
	$contact4[] = "A公司";
	//系统会从0开始，给数组下标赋值
	print_r($contact4);
	//5.
	$contact5[] = 1;//索引：0
	$contact5[14] = "张三";//索引：14
	$contact5[] = "A公司";//15
	$contact5[] = "138000000";//16
	$contact5[14] = "zhangsan@163.com";
	print_r($contact5);
	//6.通过集合（set）的形式定义数组（键，值）
	$contact6 = array('编号' =>1 ,"姓名"=>"张三",
	"公司"=>"A公司" );
	print_r($contact6);
	//等价于下面的形式
	$contact7["编号"] = 1;
	$contact7["姓名"] = "张三";
	$contact7["公司"] = "A公司";
	//省略索引的形式使用array数组
	$contact8 = array(1,"张三","A公司" );
	//二维数组
	$contact9 = array(
		array(1,"张三","A公司"),
		array(2,"李四","B公司"),
		array(3,"王五","C公司")
	 );
	print_r($contact9);
	echo "访问某个值".$contact9[0][2];
	//另外一种形式
	$contact10 = array(
		"北京办事处"=>array(1,"张三","A公司"),
		"太原办事处"=>array(2,"李四","B公司"),
		"上海办事处"=>array(3,"王五","C公司")
	 );
	echo "访问某个值".$contact10["北京办事处"][2];
	print_r($contact10);






?>