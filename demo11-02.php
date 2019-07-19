<?php
try{
	$dbh = new PDO('mysql:dbname=bookstore2;host=localhost','root','12345678');
}catch(Exception $e){
	echo "数据库连接失败,".$e->getMessage();
}
$query = "UPDATE book SET price = 89 where bookName='PHP'";
$affected = $dbh->exec($query);
if($affected>0){
	echo "数据表book影响的行数为：".$affected;
}else{
	print_r($dbh->errorInfo());
}
?>