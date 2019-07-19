<?php
class DBSession{
	protected static $pdo=null;//声明PDO类的对象
	protected static $ua=null;//客户端代理浏览器
	protected static $ip=null;//客户端ip地址
	protected static $lifetime=null;//session的生命周期
	protected static $time = null;//当前时间
	//session数据库存储的启动方法
	public static function start(PDO $pdo){
		self::$pdo = $pdo;
		//获取客户端的浏览器
		self::$ua = isset($_SERVER['HTTP_USER_AGENT'])? 
		$_SERVER['HTTP_USER_AGENT'] :'';
		//获取客户端的ip地址
		self::$ip = !empty($_SERVER['HTTP_CLIENT_IP'])?
		$_SERVER['HTTP_CLIENT_IP']:
		(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])? 
		$_SERVER['HTTP_X_FORWARDED_FOR']:
		(!empty($_SERVER['REMOTE_ADDR'])? $_SERVER['REMOTE_ADDR']:'UNKNOWN'));
		//判断生成的ip地址是否合法
	filter_var(self::$ip,FILTER_VALIDATE_IP)==false && self::$ip='UNKNOWN';
		//session的生存周期进行赋值
		self::$lifetime=ini_get('session.gc_maxlifetime');
		//当前时间
		self::$time = time();
		//回调函数---写成静态方法
		session_set_save_handler(
			array(__CLASS__,'open'), 
			array(__CLASS__,'close'), 
			array(__CLASS__,'read'), 
			array(__CLASS__,'write'), 
			array(__CLASS__,'destroy'), 
			array(__CLASS__,'gc'));
		session_start();
	}
	private static function open($path,$name){
		return true;
	}
	public static function close(){
		return true;
	}
	public static function read($sid){//读取session信息
		$sql = "SELECT * FROM session WHERE sid =?";
		$sth = self::$pdo->prepare($sql);
		$sth->execute(array($sid));
		if(!$result=$sth->fetch(PDO::FETCH_ASSOC)){
			return '';
		}
		return $result['data'];
	}
	public static function write($sid,$data){
		$sql = "SELECT * FROM session WHERE sid =?";
		$sth = self::$pdo->prepare($sql);
		$sth->execute(array($sid));
		if($result=$sth->fetch(PDO::FETCH_ASSOC)){
			if($result['data']!=$data ||self::$time>($result['update_time']+30)){
$sql = "UPDATE session SET update_time=?,data=? WHERE sid=?";
$sth = self::$pdo->prepare($sql);
		$sth->execute(array(self::$time,$data,$sid));
			}
		}else{
			if(!empty($data)){
$sql="INSERT INTO session(sid,update_time,client_ip,user_agent,data)VALUES(?,?,?,?,?)";
$sth = self::$pdo->prepare($sql);
$sth->execute(array($sid,self::$time,self::$ip,self::$ua,$data));
			}
		}
		return true;
	}
	public static function destroy($sid){
		$sql = "DELETE FROM session WHERE sid=?";
		$sth = self::$pdo->prepare($sql);
        $sth->execute(array($sid));
        return true;
	}
	//通过session生存周期的时间来删除用户记录
	public static function gc($lifetime){
		$sql = "DELETE FROM session WHERE update_time < ?";
		$sth = self::$pdo->prepare($sql);
        $sth->execute(array(self::$time-$lifetime));
        return true;	
	}
}
?>