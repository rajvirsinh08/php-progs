<html>
<head>
	<title>[Unit-3 program-4]create a form containing combo-box with some product name as items
			:-whenever a user selects a particuler product from the combo-box,it should be sent to the 
			  server asynchronously(i.e. without prossing submit button)
			:-Implement using AJAX.
	</title>
	<script type="text/javascript" language="javascript">
		function prodisplay()
		{
			var xmlhttp;
			if(window.XMLHttpRequest)
			{
				xmlhttp=new XMLHttpRequest();
			}
			var cat=document.getElementById('cat').value;
			xmlhttp.open('GET','program4_php_code.php?x='+cat,true);
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
    <select name="cat" id="cat" onchange="prodisplay()">
		<option value="">Please select</option>
		<option value="camera">camera</option>
		<option value="mobile">mobile</option>
		<option value="leptop">leptop</option>
		<option value="keyboard">keyboard</option>
	</select>
    <h1 id="info"> </h1>
</body>
</html>