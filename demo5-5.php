<?php
//final--》最终
//一个类定义的时候，前面加了final关键字，这个类就不能被继承了
//存在继承关系的两个类中，父类中的函数定义时，加了fianl关键字，此函数就不能在子类中覆写了(override)
class MyClass{
	//..............
	final function fun(){
		//,............
	}
}
class MyClass2 extends MyClass{
	//............
	function fun(){

	}
}
?>