<?php
//指针---->pointer(地址)--->编程更加灵活（访问内存中的任意地址）
//机器字长（寄存器64）---存储字长（一次存取数据的长度）---指令字长（指令）
//地址--->内容    （op，地址）
//在内存中的空间，访问不完全
//间接访问内存的形式---->指针（间接寻址）
//使用指针的程序速度慢。
//寄存器--->cache（缓存）解决存储设备速度不匹配--->内存--->硬盘
//
//文件指针
$filename = "C:\\AppServ\\www\\studyphp\\12.txt";
$fp = fopen($filename,"r") or die("打开文件失败");
//文件指针的初始位置为：0
echo ftell($fp)."<br>";
//读取文件中前10个字符0-9
echo fread($fp,10)."<br>";
//新的指针位置：10
echo ftell($fp)."<br>";
//将指针向后移动100个位置
fseek($fp, 100,SEEK_CUR);
echo ftell($fp)."<br>";
echo fread($fp,10)."<br>";//110---120
//将指针移动到倒数第10个位置
fseek($fp,-10,SEEK_END);
echo fread($fp,10)."<br>";
//将文件指针移动到文件的开头
rewind($fp);
echo ftell($fp)."<br>";
fclose($fp);
?>