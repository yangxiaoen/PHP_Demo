<?php
//面向对象
//类---->模板、数据类型
class Person{
	//属性（静态）
	private  $name;//私有属性
	private  $age;
	private  $sex;
	//函数（动态）
	//构造方法--->在实例化对象的时候会自动的调用构造方法的内容
	function __construct($name='',$sex='男',$age= 10){
		$this->name = $name;
		$this->sex  = $sex;
		$this->age = $age;		
	}
	//通过setter（写）和getter（读）方法给属性赋值
	//this关键字--->指向类中的属性
	public function setSex($sex){
		if($sex=='男'||$sex=='女'){
		$this->sex = $sex;}
	}
	public function getSex(){
		return $this->sex;
	}
	public function setAge($age){
		if($age>150||$age<0){
			return;
		}
		$this->age = $age;
	}
	public function getAge(){
		return $this->age;
	}
	function say(){
		echo "我叫：".$this->name." 性别：".$this->sex." 年龄：".$this->age."<br>";
	}
	function run(){
		echo "人在跑步";
	}
	//析构函数--->在对象销毁时，自动执行析构函数的内容
	function __destruct(){
		echo "再见".$this->name."<br>";
	}
	//封装 继承  多态
}
//实例化对象----》（定义一个变量）


$per1 = new Person("张三",'男',23);
$per1->setSex("sdasdsa");
$per1->setAge(200);
$per1->say();
//$per1->say();
$per2 = new Person("李四",'女');
//$per2->say();
$per3 = new Person("王五");
//$per3 ->say();
//给属性赋值
// $per1->name = '张三';
// $per1->sex = '男';
// $per1->age  =20;
// //取属性的值
// echo "per1的名字为：".$per1->name."<br>";
// //对象调用方法
// $per1->say();
// $per1->run();





?>