<html>
	<head>
		<title>[unit-3 prog-8.1] Write a program that checks a particular stuId already exits in the 
student(stuId,stu_name,mob,country) table or not. If stuId exists then display a message 
"User Already Exit. Try another stuId". If it does not exits then add the data in the 
student table.Implement using AJAX.</title>
	
	<script type="text/javascript" language="javascript">
		function serchsprod()
		{
			var xmlhttp;
			
			if(window.XMLHttpRequest)
			{
				xmlhttp = new XMLHttpRequest();
			}
			
			var r = document.getElementById('search').value;
			xmlhttp.open('GET','P8_2.php?sr='+r,true);
			
			xmlhttp.onreadystatechange=function()
			{
				if(xmlhttp.readyState==4 && xmlhttp.status==200)
				{
					document.getElementById('info').innerHTML=xmlhttp.responseText;
				}
			}
			
			xmlhttp.send();
		}
	</script>
</head>
<body>
	Prodct Id : <input type="text" name="search" id="search">
	<input type="submit" value="search." onclick="serchsprod();">
	<h1 id='info'></h1>
</body>
</html>