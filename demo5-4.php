<?php
	class MyClass{
		protected $var = 100;
		protected function printInfo(){
			echo "Hello";
		}
	}
	class MyClass2 extends MyClass{
		function useProperty(){
			echo "输出父类中属性".$this->var.'<br>';
			$this->printInfo();
		}
	}
	// 父类中私有的属性和函数，子类不可以使用
	$subObj = new MyClass2();
	$subObj->useProperty();
	//$subObj->var = 20000;//类外部不能访问protected属性
?>