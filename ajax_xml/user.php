<?php
$data=array();
include("lib.php");
if(isset($_REQUEST["un"])){
	$sql="select * from user where uname='".$_REQUEST["un"]."'";
	//echo $sql;
	loadFromMySQL($sql);
	if(isset($data[0])){
		echo $data[0]["uname"]."<br/>";
		echo $data[0]["email"]."<br/>";
		echo $data[0]["url"]."<br/>";
	}
	else{
		echo "No data found";
	}
	//print_r($data);
}
?>