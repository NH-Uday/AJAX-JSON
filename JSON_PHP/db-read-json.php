<?php
include("db_rw.php");
$jsonData= getJSONFromDB("select uname,cgpa from user where cgpa>2.9");

/*$jsonData='[{"id":"10","uname":"test","cgpa":"9.99"},
{"id":"123","uname":"xyz","cgpa":"3.90"},
{"id":"1256","uname":"test2","cgpa":"2.30"}]';*/
//echo $jsonData;
$jsn=json_decode($jsonData);
//echo "<pre>";print_r($jsn);echo "</pre>";
//echo $jsn[1]->uname;
foreach($jsn as $v){
	//echo "<p>".$v["name"]." with cgpa : ".$v["cgpa"]."</p>";
	echo "<p>".$v->uname." with cgpa : ".$v->cgpa."</p>";
}
?>