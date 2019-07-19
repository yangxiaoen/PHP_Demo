<?php
//会话控制
//1.为什么要使用会话控制？
//（1）浏览web页面，使用http协议，它是一个无状态协议，
//HTTP协议之间没有一种机制来维护两个事务之间的状态。
//所以要使用会话控制机制来维护客户端和服务器端之间的状态。
//会话控制就是允许服务器跟踪同一个客户端做出的连续请求。
//会话控制方法：cookie(小甜饼)和session方式
//cookie---->把要保存的信息存储到客户端中（键值对）
//session--->把要保存的信息存储到服务器中（键值对）
//1.通过cookie进行会话控制。浏览器必须支持（100%）在PHP中使用
//setCookie()函数进行信息的保存
//setCookie("username","smith",time()+60*60*24*7);
//1.cookie识别名称 2.识别名称对应的值 3.信息的生存时间
//2.通过cookie设置多个值
setCookie("user[username]","xiaoming");
setCookie("user[password]",md5("123456"));
setCookie("user[email]","xiaoming@qq.com");

//3.删除cookie内容
setCookie("username");//在setCookie中只填写一个参数表示删除cookie内容
setCookie("username","",time()-1);

?>