<?php
try{
	$dbh = new PDO('mysql:dbname=bookstore2;host=localhost','root','12345678');
}catch(Exception $e){
	echo "数据库连接失败,".$e->getMessage();
}
//查询的方法
$query = "SELECT price,detail,publisher From book";
try{
	$bookdata= $dbh->query($query);
	echo "数据表有".$bookdata->rowCount()."条的记录。\n";
	foreach ($bookdata as $row) {
		echo $row['price']."\t";
		echo $row['detail']."\t";
		echo $row['publisher']."\n";
	}
}catch(Exception $e){
	echo $e->getMessage();
}
?>