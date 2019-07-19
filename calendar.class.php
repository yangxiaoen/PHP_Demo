<?php
//日历
class Calendar{
	//属性
	private $year;//年
	private $month;//月
	private $days;//一个月有多少天
	private $start_weekdays;//当月第一天对应的是周几
	//构造方法--->初始化日期的属性
	function __construct(){
		//1.获取年份的值
		$this->year = isset($_GET["year"])? $_GET["year"]:date("Y");
		$this->month = isset($_GET["month"])? $_GET["month"]:date("m");
		//t--->表示这个月有多少天
		//w--->这个月第一天对应的是星期几
		$this->days = date("t",mktime(0,0,0,$this->month,1,$this->year));
		$this->start_weekdays = date("w",mktime(0,0,0,$this->month,1,$this->year));
	}
	//toString
	function __toString(){
		$out.='<table align="center">';
		$out.=$this->chageDate();
		$out.=$this->weekList();
		$out.=$this->dayList();
		$out.='</table>';
		return $out;
	}
	private function weekList(){
	$week = array('日','一','二','三','四','五','六');
	$out.='<tr>';
	for($i=0;$i<count($week);$i++){
		$out.='<th class="fontb">'.$week[$i].'</th>';
	}
	$out.='</tr>';	
	return $out;
	}
	public function dayList(){
		$out.='<tr>';
		for($j=0;$j<$this->start_weekdays;$j++){
			$out.= '<td>&nbsp;</td>';
		}//空格
		for($k = 1;$k<=$this->days;$k++){
			$j++;
			if($k==date('d'))
				$out.='<td class="fontb">'.$k.'</td>';
			else 
				$out.='<td>'.$k.'</td>';
			if($j%7==0)
				$out.='</tr><tr>';
		}
		while ($j%7!==0) {
			$out.='<td>&nbsp;</td>';
			$j++;
		}
		$out.='</tr>';
		return $out;
	}
private function prevYear($year,$month){
	$year = $year-1;
	if($year<1970){
		$year = 1970;
	}
	return "year={$year}&month={$month}";
}
private function prevMonth($year,$month){
	if($month==1){
		$year = $year-1;
		if($year<1970)
			$year=1970;
		$month=12;
	}else{
		$month--;
	}
	return "year={$year}&month={$month}";
}
private function nextYear($year,$month){
	$year = $year+1;
	if($year>2038){
		$year = 2038;
	}
	return "year={$year}&month={$month}";
}
private function nextMonth($year,$month){
	if($month==12){
		$year = $year+1;
		if($year>2038)
			$year=2038;
		$month=1;
	}else{
		$month++;
	}
	return "year={$year}&month={$month}";
}
private function chageDate($url="7.php"){
	$out.='<tr>';
	$out.='<td><a href="'.$url.'?'.$this->prevYear($this->year,$this->month).'">'.'<<'.'</a></td>';
	$out.='<td><a href="'.$url.'?'.$this->prevMonth($this->year,$this->month).'">'.'<'.'</a></td>';
	$out.='<td colspan="3">';
	$out.='<select name="year" onchange="window.location=\''.$url.'?year=\'+this.options[selectedIndex].value+\'&month='.$this->month.'\'">';
	for($sy=1970;$sy<=2038;$sy++){
		$selected = ($sy==$this->year)? "selected":" ";
		$out.='<option'.$selected.'value="'.$sy.'">'.$sy.'</option>';
	}
	$out.='</select>';
	$out.='</td>';

	$out.='</tr>';
	return $out;


}
}
?>