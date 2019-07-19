<?php
class TestClass{
	private $foo;
	function __construct($foo){
		$this->foo = $foo;
	}
	//魔法函数---__toString(),当调用对象的时候，会自动执行toString()魔法函数
	public function __toString(){
		return $this->foo;
	}

	//__call(),可以处理类中不存在的函数
	function __call($functionName,$args){
		echo "你所调用的函数：".$functionName."(参数：";
		print_r($args);
		echo ")不存在<br>\n";
	}
	function printHello(){
		echo "这是hello函数";
	}
}
$obj = new TestClass("hello");
echo $obj;
$obj->printHello();
$obj->myFun("one",2,"three");
?>