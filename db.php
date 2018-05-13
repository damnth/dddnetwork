<?php
	$mysqli = new mysqli("localhost", "root", "", "dddnetwork");
	$wordecho  = "test";
	function setJSON($json,$value)
	{
		$wordecho .= $value;
	}
	function startJSON()
	{
		if($wordecho!="[")
		{
			$wordecho  .= $value;
		}
	}
	function endJSON()
	{
		if($json=="")
		{
			$wordecho  .= "]";
		}
	}
	
	//mysql_query("SET NAMES UTF8");
	//mysql_query("SET CHARACTER SET utf8");
	/*session_save_path("./session/");
	session_start();	
	date_default_timezone_set("Asia/Bangkok");
	if( !isset($_SESSION['username']) )
	{
		$_SESSION['username'] = '';
		$_SESSION['level'] = '';
		$_SESSION['levelValue'] = '100';
		$_SESSION['nowmenu'] = '';
		$_SESSION['addselected'] = '';
	}*/
	/*$date = date('Y/m/d H:i:s', time());
	$dateYmd = date("Y-m-d", strtotime($date) - 257);
	
	$countdate = 0;
	$sql ="select * from today where date='$dateYmd'";
	$result = mysql_query($sql)or die(mysql_error());
	while($row = mysql_fetch_assoc($result)){
		$countdate++;
	}
	if($countdate==0)
	{
		$sql2 ="insert into today(date,count) values('$dateYmd',0)";
		$result2 = mysql_query($sql2)or die(mysql_error());
	}*/

?>