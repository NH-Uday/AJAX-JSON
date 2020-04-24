<?php
$c=0;
    $conn = mysqli_connect("localhost", "root", "","cred");
	$sql="INSERT INTO `customer`(`firstname`, `lastname`, `date_of_birth`, `gender`, `phone`, `email`, `password`) VALUES ('".$_REQUEST["fName"]."','".$_REQUEST["lName"]."','".$_REQUEST["Day"]."-".$_REQUEST["Month"]."-".$_REQUEST["Year"]."','".$_REQUEST["gender"]."','".$_REQUEST["phone"]."','".$_REQUEST["email"]."','".$_REQUEST["pass"]."')";
	//echo $sql;
	$result = mysqli_query($conn, $sql)or die(mysqli_error($conn));

echo "<br/>";
echo $c." charactes appended";
?>
<br/><a href="login.php">Login</a><br/>