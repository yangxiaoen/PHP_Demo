<?php
//php和Mysql数据库的连接
//PHP语言如果要与其它数据库连接，怎么办？
//PDO---》数据库抽象层---->任务：进行转换
//数据库（Mysql,ODBC,Oracle,SQLite...）---PDO----PHP
//通过PDO方式连接数据库
//如果使用PDO方法连接不同的数据库，连接字符串都不相同
$dsn = 'mysql:dbname=bookstore;host=localhost';
//$dsn = 'OCI:dbname = XXXX;charset=UTF-8';
$user = 'root';
$password = '12345678';
//持续连接属性--->
$opt = array( PDO::ATTR_PERSISTENT => true);
try{
	$dbh=new PDO($dsn,$user,$password,$opt);
	echo "连接成功！";
}catch(Exception $e){
	echo "数据库连接失败！".$e->getMessage();
}
//PDO方式连接数据库可以配置属性
//常用属性配置
echo "\nPDO是否关闭自动提交功能".$dbh->getAttribute(PDO::ATTR_AUTOCOMMIT);
echo "\n当前PDO的错误处理模式".$dbh->getAttribute(PDO::ATTR_ERRMODE);
echo "\n表字段字符的大小写转换".$dbh->getAttribute(PDO::ATTR_CASE);
echo "\n与连接状态相关的特有信息".$dbh->getAttribute(PDO::ATTR_CONNECTION_STATUS);
echo "\n空字符串转换为SQL的null".$dbh->getAttribute(PDO::ATTR_ORACLE_NULLS);
echo "\n应用程序提取获取数据大小".$dbh->getAttribute(PDO::ATTR_PERSISTENT);
echo "\n数据库服务器信息".$dbh->getAttribute(PDO::ATTR_SERVER_INFO);
echo "\n数据库服务器版本的信息".$dbh->getAttribute(PDO::ATTR_SERVER_VERSION);
echo "\n数据库客户端版本信息".$dbh->getAttribute(PDO::ATTR_CLIENT_VERSION);









?>