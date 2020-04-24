<html>
<head>
<script>
var xmlhttp = new XMLHttpRequest();
var flag=true;
function showHint(el) {
	var str=el.value;
	//alert(el.id);
	//document.getElementById("spinner").style.visibility="visible";
	xmlhttp.onreadystatechange = function() {		
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {	
			var m=document.getElementById("txtHint");
			m.innerHTML=xmlhttp.responseText;
			if(xmlhttp.responseText=="Email taken"){
				flag=false;
			}
			else if(xmlhttp.responseText=="ID taken"){
				flag=false;
			}
			else{flag=true;}
			//document.getElementById("spinner").style.visibility="hidden";
		}
	};
	var url="";
	if(el.id=="email"){
		url="fetch.php?email="+str;
	}
	else if(el.id=="uname"){
		url="fetch.php?uname="+str;
	}
	else if(el.id=="synid"){
		url="fetch.php?id="+str;
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
	alert(flag);
	return flag;
}
</script>
</head>
<body>

<form action="next.php" name="frm">
<p><b>Start typing a name in the input field below:</b></p>
uname : <input type="text" onkeyup="showHint(this)" name="uname" id="uname"> <img id="spinner" src="loading.gif" width="20px" height="20px" style="visibility:hidden"> <br/><br/>
Email : <input type="text" onkeyup="showHint(this)" name="email" id="email"> <img id="spinner" src="loading.gif" width="20px" height="20px" style="visibility:hidden"><br/><br/>
id : <input type="text" onkeyup="showHint(this)" name="synid" id="synid"> <img id="spinner" src="loading.gif" width="20px" height="20px" style="visibility:hidden">
<p style="color:red;" id="txtHint"></p>
<br/>
<input type="submit" value="show" onclick="return validate()">
</form>
</body>
</html>