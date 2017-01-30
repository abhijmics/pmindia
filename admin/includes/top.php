
<div id="date">
Today is: &nbsp;&nbsp;
<?php
echo date("j F Y");
?>



<html>
<head>
<script type="text/javascript"> 
function display_c()
{
var refresh=1000; // Refresh rate in milli seconds
mytime=setTimeout('display_ct()',refresh)
}

function display_ct() {
var strcount
var x = new Date()
var x1=x.getMonth() + "/" + x.getDate() + "/" + x.getYear(); 
x1 = x.getHours( )+ ":" + x.getMinutes() + ":" + x.getSeconds();
document.getElementById('ct').innerHTML = x1;

tt=display_c();
}
</script>
</head>

<body onload=display_ct();>
<span id='ct' >
	
</span>

</body>
</html>

</div>


<h4 style="font-style: italic; font-family: Arial;"><center>Focus on education and develop the nation</center></h4>
