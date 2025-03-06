<html>
<head>
	<title>[Unit-3 program-3]write a program for converting a string into uppercase using AJAX.</title>
	<script type="text/javascript" language="javascript">
    function uppercase()
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

        var n1=document.getElementById('n1').value;
        xmlhttp.open('POST','program3_php_code.php?n='+n1,true);

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
    Enter name : <input type="text" id="n1" name="n1" onkeyup="uppercase()"/><br/>
    <h1><div id="info"></div></h1>
</body>
</html>