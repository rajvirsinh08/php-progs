<html>
<head>
	<title>[Unit-3 program-2]create a form containing field (Name).when the user enters his /has name and key 
			is released the form should display a welcome message for the user.
	</title>
	<script type="text/javascript" language="javascript">
		function showdata()
		{
			var xmlhttp;
			if(window.XMLHttpRequest)
			{
				xmlhttp=new XMLHttpRequest();
			}
			else
			{
				xmlhttp=new ActiveXObject('Microsoft.XMLHTTP');
			}
			
			var unm=document.getElementById('name').value;
			xmlhttp.open('POST','program2_php_code.php?uname='+unm,true);

			xmlhttp.onreadystatechange=function()
			{
				if(xmlhttp.readyState==4 && xmlhttp.status==200)
				{
					document.getElementById("info").innerHTML=xmlhttp.responseText;
				}
			}
			xmlhttp.send();
		}
	</script>
</head>

<body>
    Enter name : <input type="text" id="name" name="name" onkeyup="showdata();"/><br/>
    <h1><div id="info"></div></h1>
</body>
</html>