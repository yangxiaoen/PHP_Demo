<?php
class MyClass{
	//静态变量
	static $count;//共享一个变量
	//常量
	const PI = 3.1415926;
	function __construct(){
		self::$count++;//调用静态变量
	}
	function getPI(){
		return self::PI;
	}
	static function getCount(){
		return self::$count;
	}//静态函数
}
//在类的外部使用静态变量时，类名::$静态变量
//在类的内部使用静态变量时,self::$静态变量
//在类的外部使用常量时，类名::静态变量
//在类的内部使用常量时,self::静态变量
MyClass::$count = 0;
$myclass1 = new MyClass(); 
$myclass2 = new MyClass();
$myclass3 =new MyClass();
echo MyClass::getCount();
echo MyClass::PI.'<br>';
?>