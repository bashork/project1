<html>
<head>
	<script type = 'text/javascript'> 
function findmatch('search'){
if (window.XMLHttpRequest) {
xmlhttp = new XMLHttpRequest();
} else{ 
	xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');


}
xmlhttp.onreadystate = function(){ // on the ready
 //state of xmlhttp which
 //is our xmlhttp request complete the function in these par
 //etasies
 if (xmlhttp.readyState == 4 && xmlhttp.status ==200){
 	document.getElementById('results').innerHTML = xmlhttp.responseText //change html inside of this div

 }

}
xmlhttp.open('GET','search.inc.php?search_text='+document.search.search_text.value,'true')// "%'ORDER BY 'times_searched'"
}

	</script>
</head>
<body>
	<form id = 'search' name = 'search'>
		Type a name: <br>
		<!--every time the key is pressed run function findmatch -->
		<input type = 'text' name = 'keyword' onkeyup = 'findmatch();'>  
	</form>
	<div id = 'results'></div>
</body>
</html>