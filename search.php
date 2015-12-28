
<!-- <script type = 'text/javascript'> 
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
 	document.getElementById('search_results').innerHTML = xmlhttp.responseText //change html inside of this div

 }

}
xmlhttp.open('GET','search.inc.php?search_text='+document.search.search_text.value,'true')// "%'ORDER BY 'times_searched'"
}

	</script>
-->

<div name = 'SearchBoxDiv' align = 'left'>
<p>Otsi kursust!</p>
  <div class="col-lg-5">
    <div class="input-group">
      <input type="text" class="form-control" placeholder="Kursuse nimi või ainekood ..."
      name = 'search' onkeyup = 'findmatch();'>
      <span class="input-group-btn">
        <button class="btn btn-default" type="button">Otsi!</button>
        <div id = 'search_results'></div>

      </span>
    </div><!-- /input-group -->
  </div><!-- /.col-lg-6 -->
</div><!-- /.row -->
<br>
<br>


