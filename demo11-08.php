<?php
try{
	$dbh = new PDO('mysql:dbname=bookstore2;host=localhost','root','12345678');
}catch(Exception $e){
	echo "数据库连接失败,".$e->getMessage();
}
try{
	$price = 80;
	$dbh->beginTransaction();//开始事务
	$affected_rows = $dbh->exec("update account2 set cash=cash-{$price} where name='userA'");//转出
	if($affected_rows>0){
		echo "userA成功转出{$price}元人民币<br>";
	}else{
		throw new Exception('userA转账失败！');
	}
	$affected_rows = $dbh->exec("update account2 set cash=cash+{$price} where name='userB'");
	if($affected_rows>0){
		echo "userB成功转入{$price}元人民币<br>";
	}else{
		throw new Exception('userB转账失败！');
	}
	echo "交易成功！";
	$dbh->commit();
}catch(Exception $e){
	echo "交易失败".$e->getMessage();
	$dbh->rollback();
}
?>