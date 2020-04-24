<?php
$data=array();
include("lib.php");
if(isset($_REQUEST["uname"])){
	//echo $_REQUEST["email"];
	$sql="select * from user where uname='".$_REQUEST["uname"]."'";
	//echo $sql;
	loadFromMySQL($sql);
	//loadFromXML($_REQUEST["uname"]);
	//print_r($data);
	foreach($data as $v){
		echo "<p>";
		echo "Email of <b>".$v["uname"]."</b> is ".$v["email"];
		echo "</p>";
	}
	if(sizeof($data)==0)
		echo "Not found";
}
else if(isset($_REQUEST["email"])){
	$sql="select * from user where email='".$_REQUEST["email"]."'";
	//echo $sql;
	loadFromMySQL($sql);
	//loadFromXML($_REQUEST["email"]);
	if(sizeof($data)>0)
		echo "Email taken";
	else
		echo "Ok";
}
?>