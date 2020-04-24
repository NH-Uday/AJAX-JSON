<script type="text/javascript">
function validate(){
	var flag=true;
	var un=document.frm.uname.value;
	var pass=document.frm.pass.value;
	var cpass=document.frm.confpass.value;
	var email=document.frm.email.value;
	var str="";
	if(un.length==0){
		flag=false;
		str="must type user name";
	}
	else if(pass!=cpass){
		flag=false;
		str="passworods must match";
	}
	else if(email.indexOf("@")<1){
		flag=false;
		str="invalid email";
	}
	document.getElementById("msg").innerHTML=str;
	return flag;
}
</script>
<form action="regi_validate.php" name="frm" method="post"><pre>
U Name:
<input type="text" name="uname"><br/>
Password:
<input type="password" name="pass"><br/>
Confirm Password:
<input type="password" name="confpass"><br/>
E Mail:
<input type="text" name="email"><br/>
<input type="submit" onclick="return validate()" name="sbt" value="submit" />
<span id="msg"></span>
</pre>
</form>
<a href="login.php">Login</a><br/>
<a href="index.html">Home</a><br/>