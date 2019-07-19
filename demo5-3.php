<?php
//继承
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
	function run(){
		echo $this->name."在跑步".'<br>';
	}
}
	//继承--->扩展子类
	//可将父类中public的属性和函数，都继承到子类中
	class Student extends Person{
		//Person-->父类  Student-->子类
		//一个子类只能有一个父类，不支持多继承
		//但是php支持多重继承
		var $school;
		function study(){
		echo $this->name."正在".$this->school.'学习'.'<br>';
		}
	}

	class Teacher extends Student{
		var $wage;
		function __construct($name,$sex,$age,$school,$wage){
			//调用父类中的构造函数
			parent::__construct($name,$sex,$age);
			$this->school= $school;
			$this->wage = $wage;
		}
		function teaching(){
			echo $this->name."在".$this->school."上班,工资为：".$this->wage.'<br>';
		}
	}
$teacher1 = new Teacher("张三","F",34);//调用父类中的构造函数
$teacher1->school = '山西传媒学院';
$teacher1->wage = 3000;
$teacher1->say();//父类中的say()函数
$teacher1->study();
$teacher1->teaching();
$teacher2 = new Teacher("李四","M",45,"山西大学",4000);
$teacher2->teaching();



?>