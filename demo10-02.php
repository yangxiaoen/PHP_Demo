<?php
//1.连接数据库（多种）
//2.操作 增 删 改 查 代码
//存储过程
//localhot---->Ip地址
$link = mysql_connect('localhost','root','12345678');
if(!$link){
	die('数据库连接失败'.mysql_error());
}
//查看数据库的基本信息
echo mysql_get_client_info().'<br>';//客户端API函数库的版本信息
echo mysql_get_host_info().'<br>';//与mysql服务器连接的类型
echo mysql_get_proto_info().'<br>';//通讯协议的版本信息
echo mysql_get_server_info().'<br>';//数据库服务器的版本信息
echo mysql_client_encoding().'<br>';//客户端默认字符集
echo mysql_stat();//当前工作状态
mysql_close($link);//关闭数据库
?>