<html>
<head>
	
	<script type='text/javascript'>
function load(thediv,thefile){

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


xmlhttp.open('GET','thefile', true); //specify the file you want to open

xmlhttp.send();
}

	</script>
</head>
<body>
	<input type = 'submit' onclick = 'load("anotherdiv", "ajax2.inc.php")'>
	<div id = 'anotherdiv'>

	</div>
</body>
<html>