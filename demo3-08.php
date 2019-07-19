<?php
//两种发送数据的方式（重要）get（明文） post（加密）
//$_GET可以捕获用户通过get方式发送的信息
echo "参数为action的值：".$_GET['action']."</br>";
echo "参数为user的值：".$_GET['user']."</br>";
echo "参数为tid的值：".$_GET['tid']."</br>";
echo "参数为page的值：".$_GET['page']."</br>";
?>