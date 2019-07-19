<?php
//使用回调函数处理数组
//给定一个数组，将数组中的偶数留下，奇数删除
$array = array('a'=>1, 'b'=>2,'c'=>3,'d'=>5,'e'=>6);
function fun($var){//过滤函数
	if($var % 2==0) return true;
}
//array_filter(数组，函数名称字符串)
print_r(array_filter($array,'fun'));
//////////////////////
$array2 = array('a'=>'Liunx', 'b'=>'Apache','c'=>'Mysql','d'=>'PHP');
//array_walk() 对数组中的每个元素应用回调函数处理
function fun2($value,$key){
	echo " The key ".$key." has the value ".$value."<br>";
}
array_walk($array2,'fun2');
////////////
function fun3($value,$key,$p){
	echo $key." ".$p." ".$value."<br>";
}
array_walk($array2,'fun3',"has the value ");
///////////
function fun4(&$value,$key){
	$value = 'Web';
}
array_walk($array2,'fun4');
print_r($array2);
?>