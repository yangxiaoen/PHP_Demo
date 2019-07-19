<?php
//Vcode--->生成4位图形验证码
class Vcode{
	//定义属性
	private $width;  //验证码的图片宽度
	private $height; //验证码的图片高度
	private $codeNum; //验证码的字符个数
	private $disturbColorNum;  //干扰元素的数量
	private $checkCode;  //验证码的字符内容
	private $image;//验证码资源
	//构造方法---->初始化属性
	function __construct($width=80,$height=20,$codeNum=4){
		$this->width = $width;
		$this->height = $height;
		$this->codeNum = $codeNum;
		//生成干扰元素
		$number = floor($height*$width/15);
		if($number>240-$codeNum)
			$this->disturbColorNum = 240-$codeNum;
		else
			$this->disturbColorNum = $number;
		$this->checkCode = $this->createCheckCode();//自定义的函数
	}
	//1.将验证码字符串串保存到服务器中
	//2.生成验证码图片
	function __toString(){
		$_SESSION["code"] = strtoupper($this->checkCode);
		$this->outImg();//生成验证码图片--->自定义
		return '';
	}
	//实现outImg()函数
	private function outImg(){
		//1.创建图像资源，并初始化背景 
		$this->getCreateImage();//自定义
		//2.设置干扰元素
		$this->setDisturColor();//自定义
		//3.将随机产生的字符串，画到图像资源中
		$this->outputText();//自定义
		//4.将图像按照指定格式进行输出
		$this->outputImage();//自定义
	}
	private function getCreateImage(){
		//创建一个真彩色的画布
		$this->image = imagecreatetruecolor($this->width, $this->height);//高度，宽度
		//准备一个背景颜色RGB(0-255)
		$backColor = imagecolorallocate($this->image, rand(225,255), rand(225,255), rand(225,255));
		//给图片填充背景颜色
		@imagefill($this->image, 0, 0, $backColor);
		//图像绘制边框(0,0,0)--->黑色
		$border = imageColorAllocate($this->image,0,0,0);
		//绘制长方形
		imagerectangle($this->image, 0, 0, $this->width-1, $this->height-1, $border);
	}
	public function createCheckCode(){
		//随机生成字符串
		$code = "0123456789qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM";
		for($i=0;$i<$this->codeNum;$i++){
			$char = $code{rand(0,strlen($code)-1)};
			$ascii .= $char; 
		}
		return $ascii;
	}
	//设置干扰元素
	public function setDisturColor(){
	//1.随机的在画布上画点
	for($i=0;$i<=$this->disturbColorNum;$i++){
		//产生画笔
		$color = imagecolorallocate($this->image,rand(0,255),rand(0,255),rand(0,255));
		imagesetpixel($this->image,rand(1,$this->width-2), rand(1,$this->height-2), $color);}
	//2.随机的在画布上画线
	for($i=0;$i<10;$i++){
		$color = imagecolorallocate($this->image,rand(0,255),rand(0,255),rand(0,255));
		imagearc($this->image, rand(-10,$this->width), rand(-10,$this->height), rand(30,300), rand(20,200), 55, 44, $color);
	}
}
//在画布上随机的产生字符
	private function outputText(){
		for($i=0;$i<=$this->codeNum;$i++){
			$fontcolor = imagecolorallocate($this->image,rand(0,128),rand(0,128),rand(0,128));
			$fontsize = rand(3,5);
			$x = floor($this->width/$this->codeNum)*$i+3;
			$y = rand(0,$this->height-imagefontheight($fontsize));
			imagechar($this->image, $fontsize, $x, $y,$this->checkCode{$i} , $fontcolor);
		}
	}
	private function outputImage(){
		if(imagetypes()& IMG_GIF){
			ob_clean();
			header("Content-type:image/gif");
			imagegif($this->image);
		}elseif (imagetypes()& IMG_JPG) {
			ob_clean();
			header("Content-type:image/jpeg");
			imagejpeg($this->image,"",0.5);
		}elseif (imagetypes()& IMG_PNG) {
			ob_clean();
			header("Content-type:image/png");
			imagepng($this->image);
		}else{
			die("不支持的图像创建！");
		}
	}
	function __destruct(){
		imagedestroy($this->image);
	}
}

?>