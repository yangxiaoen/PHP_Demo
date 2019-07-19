<?php
//PDO对预处理语句的支持
//避免sql注入 
try{
	$dbh = new PDO('mysql:dbname=bookstore2;host=localhost','root','12345678');
}catch(Exception $e){
	echo "数据库连接失败,".$e->getMessage();
}
//1.预处理SQL语句
$query = "INSERT into book(author,bookName,detail,price,publisher)VALUES(:author,:bookName,:detail,:price,:publisher)";
//2.进行预处理指令
$stmt = $dbh->prepare($query);
//3.准备数据
$author = "李某某";
$bookName = "机器学习";
$detail ="这是机器学习的教材";
$price = 45;
$publisher = "北京大学出版社";
//4.数据的绑定
$stmt->bindParam(':author',$author);
$stmt->bindParam(':bookName',$bookName);
$stmt->bindParam(':detail',$detail);
$stmt->bindParam(':price',$price);
$stmt->bindParam(':publisher',$publisher);
//5.执行SQL语句
$stmt->execute();
?>