<?php
//对象的复制-->得到两个副本
class Person{
	protected $name;
	protected $sex;
	protected $age;
	function __construct($name='',$sex='',$age=0){
		$this->name = $name;
		$this->age = $age;
		$this->sex = $sex;
	}
	function say(){
		echo "我叫：".$this->name." 性别：".$this->sex." 年龄：".$this->age."<br>";
	}
//当执行clone进行对象复制的时候，会自动的调用__clone()魔术函数
	function __clone(){
		$this->name = "我是".$this->name."副本";
		$this->age = 10;
	}
}
$per1 = new Person('张三','女',21);
$per1->say();
//对象的复制
$per2 = clone $per1;
$per2->say();
?>