<html>
	<head>
		<title> [Unit-3 Prog-7]Write a programto validate and Email ID using regular expression and by using DOM. </title>
	
	<script language="javascript">
	function validate(obj)
	{
		regex = /(^\w+\@\w+\.\w+)/;
		match = regex.exec(obj.value);
		if(!match)
		{
			alert("Invalid email id ");
			obj.value=false;
			obj.focus();
		}
	}
	
	/*function validate(obj)
	{
		var div = document.getElementById('emaildiv');
		div.style.color ="red";
		if(div.hasChildNodes())
		{
			div.removeChild(div.firstChild);
		}
		regex = /(^\w+\@\w+\.\w+)/;
		match = regex.exec(obj.value);
		if(!match)
		{
			div.appendchild(document.createTextNode("Invalid email id."));
			obj.focus();
		}
	}*/
	</script>
</head>
<body>
Email id : <input type="text" name="emailid" onblur="validate(this)">
<div id="emaildiv">
</body>
</html>