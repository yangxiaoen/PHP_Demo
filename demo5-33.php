<?php
class AA{
	public $id;
	// public function __isset($propertyName){
	// 	return isset($this->$propertyName);
	// }
}
$a1 = new AA();
$a1=10;
var_dump(isset($a1->id));
?>