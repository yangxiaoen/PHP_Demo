<?php
//数组排序
//1.数组中只有值
$a = array(4,5,1,7,2);
//由小到大
sort($a);
print_r($a);
//由大到小
rsort($a);
print_r($a);
//2.有键值对的数组
$a2 = array(5=>'five',8=>'eight',1=>'one',7=>'seven',2=>'two');
//2.1ksort()按照键名来排序
ksort($a2);
print_r($a2);
krsort($a2);
print_r($a2);
//2.2asort()按照值排序
$a3 = array('1'=>'Liunx','a'=>'Apache','m'=>'Mysql','p'=>'PHP');
asort($a3);
print_r($a3);
arsort($a3);
print_r($a3);
rsort($a3);//忽略原来的键值
print_r($a3);
//3.用户自定义排序
$a4 = array('Liunx','Apache','Mysql','PHP');
//按照字母的个数进行排序
function sortByLen($one,$two){
	if(strlen($one)==strlen($two)){
		return 0;//两个元素相等
	}else{
		return (strlen($one)>strlen($two))? 1:-1;
	}
}
usort($a4, 'sortByLen');
print_r($a4);
//4.数组的运算
//4.1计算数组的交集--取两个数组相同的元素
$a5 = array('Liunx','Apache','Mysql','PHP');
$a6 = array('Liunx','Tomcat','Mysql','JSP');
print_r(array_intersect($a5, $a6));
//4.2计算数组的差集--取出两个数组不相同的元素（取第一个数组中的元素）
$a7 = array('Liunx','Apache','Mysql','PHP');
$a8 = array('Liunx','Tomcat','Mysql','JSP');
print_r(array_diff($a7, $a8));
//5.求数组元素的和
$a9 = array(0=>'5',1=>'25',2=>'30',3=>'35');
echo array_sum($a9);//将数组中的“值”相加
//5.判断两个数组是否相等
$a10 = array('PHP','MySQL') ;
$a11 = array(1=>'MySQL','0'=>'PHP');
var_dump($a10 ==$a11);//不严格的数组判断
var_dump($a10===$a11);//严格判断
?>