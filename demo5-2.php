<?php
class Person{
	//属性（静态）
	private  $name;//私有属性
	private  $age;
	private  $sex;
	
	function __construct($name='',$sex='男',$age= 10){
		$this->name = $name;
		$this->sex  = $sex;
		$this->age = $age;		
	}
	//系统提供的set函数，当给属性赋值的时候，会自动的调用__set()函数-----魔术函数（自动执行）
	public function __set($propertyName,$propertyValue){
		//propertyName
		if($propertyName == "sex"){
		if(!($propertyValue == "男" ||$propertyValue=="女")){
			return;
		}}
		if($propertyName =="age"){
			if($propertyValue>150||$propertyValue<0){
				return;
			}
		}
		$this->$propertyName = $propertyValue;
	}
	//__get()---》当读属性值的时候，会自动调用该魔术函数
	public function __get($propertyName){
		if($propertyName == 'sex'){
			return '保密';
		}else{
			return $this->$propertyName;
		}
	}
	//__isset() 测试变量（类中属性）是否存在的函数
	//__isset()和isset()是不一样的，当执行isset()函数的时候，
	//会自动调用__isset()
	public function __isset($propertyName){
		if($propertyName == 'name'){
			return;
		}
		return isset($this->$propertyName);
	}
	//__unset()作用，删除指定变量。参数为删除变量的名称。
	//unset()和__unset()不同的，当执行unset()函数的时候，会自动的执行__unset()
	public function __unset($propertyName){
		if($propertyName =='name'){
			return;
		}
		unset($this->$propertyName);
	}
	function say(){
		echo "我叫：".$this->name." 性别：".$this->sex." 年龄：".$this->age."<br>";
	}
	function run(){
		echo "人在跑步";
	}

	function __destruct(){
		echo "再见".$this->name."<br>";
	}
}
//实例化对象----》（定义一个变量）


$per1 = new Person("张三",'男',23);
$per1->name = '李四';
$per1->age =  250;
$per1->sex = '女';
$per1->say();
echo "性别：".$per1->sex."<br>";

var_dump(isset($per1->name));//
var_dump(isset($per1->age));//测试name属性是否是Person类中的属性
var_dump(isset($per1->sex));
var_dump(isset($per1->id));

unset($per1->name);//name属性没有删除掉
unset($per1->age);//age属性已经删除
unset($per1->sex);//sex 属性已经删除
$per1->say();
?>