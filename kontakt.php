<html>
<head>
<title>Kontakt</title>
<head>
 <script>
   //document.ready(function(){
    //  $('.container').fadeIn(1500);
     // $('.jumbotron').fadeIn(1500);
//  })
 </script> 
<style type="text/css">
body { background: url(bg1.jpg) repeat !important; } /* Adding !important forces the browser to overwrite the default style applied by Bootstrap */
.map {mapcanvas.style.border = '5px solid #404040';}
</style>

<!--GMAP  & header-->
    <?php

  include_once 'googlemap.php';
include_once 'includes/headerKontakt.php';
 ?>

</head> 
<body>
	<!--body starts here -->


<div class = 'container'  >
<div class = 'jumbotron' align = 'center' style = 'border: 10px solid #404040 ; border-radius: 10px;'>
	<br>
	<br>
 <div id="map" style = 'width:container;height:380px; border: 10px solid #404040 ; border-radius: 5px;'>
  
    </div>
    <b>Telefon:</b><br>
    66 66 666<br>
    <b>Aadress:</b><br>
    bugaga pst.111<br>
    <b>Postindeks:</b><br>11010<br>
    <b>Avatud:</b><br> E-R <br>
</div>
</div>




</body>