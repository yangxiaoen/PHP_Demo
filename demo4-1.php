<?php
//操作数组常用的方法
$os = array("Mac","NT","Irix","Liunx");
//1.in_array():判断数组元素是否在数组中，返回布尔类型的值
if(in_array("Irix",$os)) echo "got Irix";
if(in_array("mac",$os)) echo "got mac";
//区分大小写的
$a = array('1.10',12.4,1.13);
if(in_array('12.4',$a,true)) echo "got 12.4";
//如果in_array(),将第三个参数设置为true，对于字符型数字严格检验
$a2 = array(array('p','h'),array('p','r'),'o');
if(in_array(array('p','h'),$a2)) echo "get array";
//2.array_key_exists():检查给定的键名或者索引是否在数组中
$a3 = array('first'=>1,'second'=>4);
if(array_key_exists('first', $a3))echo "first在数组a3中<br>";
//isset()和array_key_exists()的区别
$a4 = array('first'=>null,'second'=>4);
if(array_key_exists('first',$a4)) echo "a4<br>";
if(isset($a4['first'])) echo "a4====";
//3.array_flip()交换数组中的键和值
$a5 = array(
	'编号' =>1 ,
	"姓名"=>"张三",
	"公司"=>"A公司",
	"地址"=>"太原市" ,
	"Email" => "aaa@163.com");
print_r(array_flip($a5));
$a6 = array("a"=>1,"b"=>1,"c"=>2);
print_r(array_flip($a6));
//4.array_reverse()翻转
$a7 = array(
	'编号' =>1 ,
	"姓名"=>"张三",
	"公司"=>"A公司",
	"地址"=>"太原市" ,
	"Email" => "aaa@163.com");
print_r(array_reverse($a7));
//5.获取数组的值count
$os2 = array("Mac","NT","Irix","Liunx");
echo count($os2).'<br>';
$a8 = array(
	'a' => array("Mac","NT","Irix","Liunx"),
	'b'=>array("Mac2","NT2","Irix2","Liunx2")
);
//如果count中使用第二个参数，赋值为1：统计内外层元素的个数
echo count($a8,1);
//6.array_count_values()统计数组中元素出现的次数
$a9 = array(1,'php','mysql','php',1);
$newArray=array_count_values($a9);
print_r($newArray);
//7.array_unique()删除数组中重复元素的值
$a10 = array('a'=>'php',b=>'mysql','c'=>'php');
print_r(array_unique($a10));

?>