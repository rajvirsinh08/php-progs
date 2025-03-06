<html>
<head>
	<title>[Unit-3 program-5.1]write a program to demostrate the example of sending items selected from 
			----check-box---- to server asynchronously. 
	</title>
	<script type="text/javascript" language="javascript">
		function selection()
		{
			var xmlhttp;
			if(window.XMLHttpRequest)
			{
				xmlhttp=new XMLHttpRequest();
			}
			var r = document.getElementsByName('game');
			var game=' ';
			
			for(var i = 0; i < r.length; i++)
			{
				if(r[i].checked == true)
				{
					game += r[i].value + " ";
				}
			}
			xmlhttp.open('GET','program5.1_php_code.php?selected='+game,true);
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

<body style="margin-left:500px;">
	<input type="checkbox" Name="game" value="cricket" onclick="selection()"/> Cricket <br/>
	<input type="checkbox" Name="game" value="football" onclick="selection()"/> football <br/>
	<input type="checkbox" Name="game" value="Kabbadi" onclick="selection()"/> Kabbadi <br/>
    <h1 id="info"></h1>
</body>
</html>