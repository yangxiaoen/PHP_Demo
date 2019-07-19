<?php
//输出cookie中保存的信息
//_COOKIE
// print_r($_COOKIE);
foreach ($_COOKIE["user"] as $key => $value) {
	echo $key.":".$value."\n";
}
?>