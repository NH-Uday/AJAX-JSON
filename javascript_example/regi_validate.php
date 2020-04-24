<?php
$file=fopen('cred.txt','a') or die("fle open error");
$c=0;
$dotPos=strpos($_REQUEST["email"],".");
$atPos=strpos($_REQUEST["email"],"@");
if(strlen($_REQUEST["uname"])==0 || strlen($_REQUEST["pass"])==0 || strlen($_REQUEST["email"])==0){
	echo "All fields are mandatory!";
}
else if($_REQUEST["pass"]!=$_REQUEST["confpass"]){
	echo "Passwords must match";
}
else if($atPos>$dotPos){
	echo "Invalid Email";
}
else{
	$sql="insert into user values('".$_REQUEST["uname"]."','".md5($_REQUEST["pass"])."','".$_REQUEST["email"]."')";
	echo $sql;
	//$conn = mysqli_connect("localhost", "root", "","cred");
	//$result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
	//$c=mysqli_affected_rows($conn);
	/*$c=$c+fwrite($file,"\r\n");
	$c=$c+fwrite($file,$_REQUEST["uname"]);
	$c=$c+fwrite($file,"-");
	$c=$c+fwrite($file,md5($_REQUEST["pass"]));
	$c=$c+fwrite($file,"-");
	$c=$c+fwrite($file,$_REQUEST["email"]);*/
}
echo "<br/>";
echo $c." record(s) appended";
?>
<br/><a href="login.php">Login</a><br/>