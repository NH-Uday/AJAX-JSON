<html>
<head>
<script>
xmlhttp = new XMLHttpRequest();
function showHint() {
	var str=document.getElementById('mytext').value;
	document.getElementById("spinner").style.visibility="visible";
	xmlhttp.onreadystatechange = function() {		
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {	
			m=document.getElementById("txtHint");
			m.innerHTML=xmlhttp.responseText;
			document.getElementById("spinner").style.visibility="hidden";
		}
	};
	var url="fetch.php";
	//data sent to fetch.php using post method
	xmlhttp.open("POST", url, true);
	xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xmlhttp.send("uname="+str);
}
</script>
</head>
<body>

<p><b>Start typing a name in the input field below:</b></p>
Your User Name : <input type="text" onkeyup="showHint()" id="mytext"> <img id="spinner" src="loading.gif" width="20px" height="20px" style="visibility:hidden">
<p id="txtHint"></p>
<br/>
<input type="button" value="show" onclick="showHint()">
<p>Used post method in AJAX function</p>
</body>
</html>