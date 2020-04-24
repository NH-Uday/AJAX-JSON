<html>
<head>
<script>
var xmlhttp = new XMLHttpRequest();
var flag=true;
var emailError=0;

function showHint(el) {
	//alert(el.id);alert(el.value);alert(el.name);alert(el.type);
	var str=el.value;
	errors=0;
	document.getElementById("spinner").style.visibility="visible";
	xmlhttp.onreadystatechange = function() {		
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {	
			var m=document.getElementById("txtHint");
			m.innerHTML=xmlhttp.responseText;
			if(xmlhttp.responseText=="Email taken"){
				emailError=1;
			}
			document.getElementById("spinner").style.visibility="hidden";
		}
	};
	var url="";
	if(el.id=="email"){
		url="fetch.php?email="+str;
	}
	else if(el.id="uname"){
		url="fetch.php?uname="+str;
	}
	//alert(url);
	xmlhttp.open("GET", url,true);
	xmlhttp.send();
	//data sent to fetch.php using post method
	//var url="fetch.php";
	//xmlhttp.open("POST", url, true);
	//xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	//xmlhttp.send("uname="+str);
}
function validate(){
	un=document.frm.uname;
	if(un.value.length==0){
		flag=false;
	}
	if(emailError>0)
		flag=false;
	
	//alert(un.value.length);
	alert(flag);
	return flag;
}
</script>
</head>
<body>

<form action="next.php" name="frm">
<p><b>Start typing a name in the input field below:</b></p>
Your User Name : <input type="text" name="uname" onkeyup="showHint(this)" id="uname"> <img id="spinner" src="loading.gif" width="20px" height="20px" style="visibility:hidden">
Email : <input type="text" name="email" onkeyup="showHint(this)" id="email"> <img id="spinner" src="loading.gif" width="20px" height="20px" style="visibility:hidden">
<p id="txtHint"></p>
<br/>
<input type="submit" value="show" name="sbt" onclick="return validate()">
<p>Used post method in AJAX function</p>
</form>
</body>
</html>