<!DOCTYPE html>
<html>
<head>
<script type="text/javascript">
function second(){
	var fn=document.fm.fName.value;
	var ln=document.fm.lName.value;
	var phn=document.fm.phone.value;
	var mail=document.fm.email.value;
	var pass=document.fm.pass.value;
	var cpass=document.fm.confpass.value;
	if(fn.length<5){
		document.fm.fName.style.color="red";
		//document.fm.uName.style.border="1px solid red";
		document.getElementById("msg").innerHTML="invalid name";
	}
	else{
		document.fm.fName.style.color="black";
		document.getElementById("msg").innerHTML="valid name";
	}
	if(ln.length<5){
		document.fm.lName.style.color="red";
		//document.fm.uName.style.border="1px solid red";
		document.getElementById("msg2").innerHTML="invalid name";
	}
	else{
		document.fm.lName.style.color="black";
		document.getElementById("msg2").innerHTML="valid name";
	}
	if(phn.length <= 10){
		document.fm.phone.style.color="red";
		//document.fm.uName.style.border="1px solid red";
		document.getElementById("msg3").innerHTML="invalid number";
	}
	else{
		document.fm.phone.style.color="black";
		document.getElementById("msg3").innerHTML="valid number";
	}
	if(mail.indexOf("@")<1){
		document.fm.email.style.color="red";
		//document.fm.uName.style.border="1px solid red";
		document.getElementById("msg4").innerHTML="invalid email";
	}
	else{
		document.fm.email.style.color="black";
		document.getElementById("msg4").innerHTML="valid email";
	}
	
}
function validate(){
	var fn=document.frm.fName.value;
	var ln=document.frm.lName.value;
	var pass=document.frm.pass.value;
	var cpass=document.frm.confpass.value;
	var str="";
	if(fn.length==0){
		flag=false;
		str="must type first name";
	}
	if(ln.length==0){
		flag=false;
		str="must type last name";
	}
	else if(pass!=cpass){
		flag=false;
		str="passworods must match";
	}
	document.getElementById("msg").innerHTML=str;
	return flag;
}
</script>
</head>
<body>
<form action="regi_validate.php" method="post"  id="fm" name="fm"><pre>
First Name:<br>
  <input onkeyup="second()" type="text" name="fName" id="txt1"><span id="msg"></span>
Last name:<br>
  <input onkeyup="second()" type="text" name="lName" id="txt2"><span id="msg2"></span>
  <br><br>
Date of Birth:<br>
  <select name="Day">
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
  <option value="9">9</option>
  <option value="10">10</option>
  <option value="11">11</option>
  <option value="12">12</option>
  <option value="13">13</option>
  <option value="14">14</option>
  <option value="15">15</option>
  <option value="16">16</option>
  <option value="17">17</option>
  <option value="18">18</option>
  <option value="19">19</option>
  <option value="20">20</option>
  <option value="21">21</option>
  <option value="22">22</option>
  <option value="23">23</option>
  <option value="24">24</option>
  <option value="25">25</option>
  <option value="26">26</option>
  <option value="27">27</option>
  <option value="28">28</option>
  <option value="29">29</option>
  <option value="30">30</option>
  </select>
  <select name="Month">
  <option value="january">January</option>
  <option value="february">Fabruary</option>
  <option value="march">March</option>
  <option value="april">April</option>
  <option value="may">May</option>
  <option value="june">June</option>
  <option value="july">july</option>
  <option value="august">August</option>
  <option value="september">September</option>
  <option value="october">October</option>
  <option value="november">November</option>
  <option value="december">December</option>
 
  </select>
  <select name="Year">
  <option value="1991">1991</option>
  <option value="1992">1992</option>
  <option value="1993">1993</option>
  <option value="1994">1994</option>
  <option value="1995">1995</option>
  <option value="1996">1996</option>
  <option value="1997">1997</option>
  <option value="1998">1998</option>
  <option value="1999">1999</option>
  <option value="2000">2000</option>
  </select>
  <br><br>
Gender:
  <input type="radio" name="gender" value="male" checked> Male
  <input type="radio" name="gender" value="female"> Female
  <input type="radio" name="gender" value="other"> Other  
  <br><br>
Phone Number:<br>
  <input onkeyup="second()" type="text" name="phone" id="txt3"><span id="msg3"></span>
  <br><br>
Email:<br>
  <input onkeyup="second()" type="text" name="email" id="txt4"><span id="msg4"></span>
  <br><br>
Password:<br>
  <input type="password" name="pass" maxlength="8"><br>
  <br>
Confirm password:<br>
  <input type="password" name="confpass" maxlength="8"><br>
  <br><br>

<input type="submit" onclick="return validate()" name="sbt" value="submit" />
<span id="msg"></span>
</pre>
</form>
<a href="login.php">Login</a><br/>
</body>
</html>