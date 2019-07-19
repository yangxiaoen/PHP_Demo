<?php
//array_map()比array_walk()更加灵活，array_map()可以同时处理多个数组
$array2 = array('Liunx', 'Apache','Mysql','PHP');
function fun1($v){
	if($v  =='Mysql'){
		return 'Oracle';
	}
	return $v;
}
print_r(array_map('fun1',$array2));
$a1 = array('Liunx', 'Apache','Mysql','PHP');
$a2 = array('Unix','PHP','Mysql','PHP');
function fun2($v1,$v2){
	if($v1 == $v2){
		return 'same';
	}
	return 'different';	
}
print_r(array_map('fun2',$a1,$a2));
print_r(array_map(null,$a1,$a2));
?>