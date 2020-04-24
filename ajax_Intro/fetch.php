<?php
$data=array();
include("lib.php");
if(isset($_REQUEST["uname"])){
	$sql="select * from user where uname='".$_REQUEST["uname"]."'";
	//echo $sql;
	loadFromMySQL($sql);
	//loadFromText($sql);
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
	if(sizeof($data)>0)
		echo "Email taken";
	else
		echo "Ok";
}
else if(isset($_REQUEST["id"])){
	$sql="select * from user where id='".$_REQUEST["id"]."'";
	//echo '<script type="text/javascript"> alert("haay i am in FETCH  !!!"); </script>';
	//echo $sql;
	loadFromMySQL($sql);
	if(sizeof($data)>0)
		echo "ID taken";
	else
		echo "Ok";
}
?>