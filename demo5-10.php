<?php
//头文件
require "demo5-9.php";
$per = new Person("张三","男",20);
//序列化对象---》将文件数据保存到文件中
$per_string = serialize($per);//字符串
file_put_contents("file.txt", $per_string);
?>