<?php
$path = "C:\\AppServ\\www\\15\\1.php";
$path_parts = pathinfo($path);//返回文件的数组
echo "目录信息：".$path_parts["dirname"];
echo "文件的名称（带后缀）".$path_parts["basename"];
echo "文件的扩展名".$path_parts["extension"];

?>