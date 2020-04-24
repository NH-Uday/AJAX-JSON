<html>
<head>
<script>
function showHint() {
	str=document.getElementById('mytext').value;
	document.getElementById("spinner").style.visibility= "visible";
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			resp=JSON.parse(xmlhttp.responseText);
			//alert(xmlhttp.responseText);
			msg="";
			for(i=0;i<resp.length;i++){
				msg=msg+resp[i].uname+" with cgpa : "+resp[i].cgpa+"<br/>";
			}
			//alert(msg);
			document.getElementById("txtHint").innerHTML = msg;
			document.getElementById("spinner").style.visibility= "hidden";
			//document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
		}
	};
	if(str.length==0)str="0";
	
	var url="jsondb.php?cgpa="+str;
	//alert(url);
	xmlhttp.open("GET", url, true);
	xmlhttp.send();
}
</script>
</head>
<body>

<p><b>Start typing a name in the input field below:</b></p>
Type a Parameter : <input type="text" id="mytext" onkeyup="showHint()"> <img id="spinner" src="loading.gif" width="20px" height="20px" style="visibility:hidden">
<p><span id="txtHint"></span></p>
<br/>
<input type="button" value="show" onclick="showHint()">
</body>
</html>