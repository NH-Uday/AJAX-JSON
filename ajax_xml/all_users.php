<?php
$data=array();
include("lib.php");
loadFromMySQL("select uname,email,dname from user u,dept d where u.did=d.did");
//loadFromMySQL("select uname,email from user");
//print_r($data);
foreach($data as $v){
		echo "<p>";
		echo "<a href='user.php?un=".$v["uname"]."'>";
		echo $v["uname"]."</b> from ".$v["dname"];
		echo "</a>";
		echo "</p>";
}
?>