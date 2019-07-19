<?php
require "demo5-9.php";
$per_string = file_get_contents("file.txt");
//反序列化操作
$per=unserialize($per_string);
$per->say();
?>