<?php
try{
	$dbh = new PDO('mysql:dbname=bookstore2;host=localhost','root','12345678');
}catch(Exception $e){
	echo "数据库连接失败,".$e->getMessage();
}
$query = "INSERT into book(author,bookName,detail,price,publisher)VALUES(?,?,?,?,?)";
$stmt = $dbh->prepare($query);
//3.准备数据
$author = "王某某";
$bookName = "人工智能";
$detail ="这是人工智能的教材";
$price = 42;
$publisher = "北京大学出版社";
//4.数据的绑定
$stmt->bindParam(1,$author);
$stmt->bindParam(2,$bookName);
$stmt->bindParam(3,$detail);
$stmt->bindParam(4,$price);
$stmt->bindParam(5,$publisher);
//5.执行SQL语句
$stmt->execute();
?>