<?php
class Person{
		private $name;
		private $sex;
		private $age;
		function __construct($name="",$sex="",$age=0 ){
			$this->name = $name;
			$this->sex = $sex;
			$this->age = $age;
		}
		function say(){
			echo "name=".$this->name." sex=".$this->sex.
			" age=".$this->age;
		}
		//__sleep():当对象序列化时，自动调用这个函数   __wakeup()：当对象反序列化时，自动调用这个函数
		function __sleep(){
			//1.将要序列化的属性存放到数组中
			$arr=array("name","age");
			return ($arr);
		}
		function __wakeup(){
			$this->age = 40;
		}
	}
	$per = new Person("张三","男",20);
//序列化对象---》将文件数据保存到文件中
$per_string = serialize($per);//字符串
file_put_contents("file2.txt", $per_string);

$per_string2 = file_get_contents("file2.txt");
//反序列化操作
$per2=unserialize($per_string2);
$per2->say();
?>