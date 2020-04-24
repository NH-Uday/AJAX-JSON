<?php
$data=array();
include("lib.php");
$sql="select * from user where uname='".$_REQUEST["uname"]."'";
//echo $sql;
//loadFromMySQL($sql);
loadFromText($sql);
//print_r($data);
foreach($data as $v){
	echo "<p>";
	echo "Email of <b>".$v["uname"]."</b> is ".$v["email"];
	echo "</p>";
}
if(sizeof($data)==0)
	echo "Not found";
//print_r($data);
$s="abc";
for($i=0;$i<1000000;$i++){
	$s.="abc";
}
?>