<html>
<head>
<title>unit3 prog1(1)</title>
<script type="text/javascript" language="javascript">
	function showdata(){
		
		var xmlhttp;
		if(window.XMLHttpRequest){
			xmlhttp=new XMLHttpRequest();
		}
		else{
			xmlhttp=new ActiveXObject('Microsoft.XMLHTTP');
		}
		
		var unm=document.getElementById('name').value;
		xmlhttp.open('POST','program1_php_code.php?uname='+unm,true);
		
		xmlhttp.onreadystatechange=function(){
			if(xmlhttp.readyState==4 && xmlhttp.status==200){
				document.getElementById("info").innerHTML=xmlhttp.responseText;
			}
		}
		xmlhttp.send();
	}
</script>
</head>
<body>
	enter name:<input type="text" id="name" name="name" onkeypress="showdata();"/><br/>
	
	<h1><div id="info"></div></h1>
</body>
</html>