<html>
<head>
	
	<script type='text/javascript'>
function load(){

	if (window.XMLHttpRequest) {
		xmlhttp = new XMLHttpRequest();

	} else {
		xmlhttp = new ActiveXObject('Micrisoft.XMLHTTP');
	}
	xmlhttp.onreadystatechange =  function(){
if (xmlhttp.readyState ==4 && xmlhttp.status ==200){
document.getElementById('adiv').innerHTML = xmlhttp.responseText;
}
	}


xmlhttp.open('GET','ajax2.inc.php', true);
xmlhttp.send();
}

	</script>
</head>
<body>
	<input type = 'submit' value = 'submit!' onclick = 'load();'>
	<div id = 'adiv'>

	</div>
</body>
<html>