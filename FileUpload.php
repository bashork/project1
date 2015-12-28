

<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">

<head>
  <!-- for QUILL  -->
 <link rel="stylesheet" type="text/css" href="quill/quill.snow.css">
 <link rel="stylesheet" type="text/css" href="quill/examples/styles/advanced.css">
 <script src='quill/quill.min.js'></script>

<!-- Bootstrap and JQuery-->
 <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
 <link href="bootstrap/css/navbar-fixed-top.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- bootstrap carousel keystrokes reaction-->
<script type="text/javascript">
$(document).bind('keyup', function(e) {
  if(e.keyCode==39){
  jQuery('a.carousel-control.right').trigger('click');
  }   
  else if(e.keyCode==37){
  jQuery('a.carousel-control.left').trigger('click');
  }
});

</script>
<!-- Drag-n-Drop client-side script -->
<script src='js/Dropzone.js'></script> 
<slink href='css/Dropzone.css'></script> 


<?php
require_once 'header.inc.php'; // registration and login <div>
?>
<style type="text/css">
body { background: url(bg1.jpg) repeat !important; }

 /* Adding !important forces the browser to overwrite the default style applied by Bootstrap */
</style>
<link rel="icon" href="favicon.ico" type="image/x-icon"/>


    <br>
    <br>
    <br>
    <div class = 'container'>
        <div class = 'jumbotron'>
<div id="myCarousel" class="carousel slide" data-interval="false">

<!-- Carousel items -->
       <div class="carousel-inner">


<!--search-box -->
         <div class="item">
         <p class = 'text-center'>Otsi Teiste konspekte</p>
         <form action = 'searchConspect.php'>
          <input type="text" class="form-control" placeholder="Kursuse nimi või ainekood ..."
      name = 'search' onkeyup = 'findmatch();'>
      <span class="input-group-btn">
        <button class="btn btn-primary" type="button">Otsi!</button>

        <?php include_once 'advanced_search.php' ?>
         </form>

       </div>
<!--History -->
         <div class="item">
        <p class = 'text-center'>Viimased Otsingud</p><br>
        <div class="panel panel-default">
  <!-- Panel name -->
  
  <!-- Table -->
  <table class="table table-striped">
  <tr>
  <td>Viimased otsingud:</td>
  </tr>

  <tr>
    <td align='center'>Viimane otsing</td>
     </tr>

  <tr>
    <td align='center'>Eelviimane otsing</td>
  </tr>

  </table>
</div>

      </div>



<div class=" active item">  <h2 class = 'text-center'>Start writing your first conspect wright now!</h2><br>
<!-- QUILL  TEXT EDITOR --> 
<div class="basic-wrapper"  style = ' width:800px; align:center'>
<input type="text" class="form-control" placeholder="Konspekti nimi" id = 'ConspectTitle'>
        <div class="toolbar-container">

          <select title="Font" class="ql-font">
            <option value="sans-serif" selected>Sans Serif</option>
            <option value="Georgia, serif">Serif</option>
            <option value="Monaco, 'Courier New', monospace">Monospace</option>
          </select>

          <select title="Size" class="ql-size">
            <option value="12px">Väike(12px)</option>
            <option value="14px" selected>Tavaline(14px)</option>
            <option value="18px">Suur(18px)</option>
            <option value="24px">SUUR(24px)</option>
          </select>
          <select title="Text Alignment" class="ql-align">
            <option value="left" selected>Left</option>
            <option value="center">Center</option>
            <option value="right">Right</option>
            
          </select>
          <button title="Bold" class="ql-bold">Bold</button>
          <button title="Italic" class="ql-italic">Italic</button>
          <button title="Underline" class="ql-underline">Under</button>
          <button title="List" class="ql-list">List</button>
          <button title="Bullet" class="ql-bullet">Bullet</button>
          
        </div>

<!--QUILL textarea -->
        <div class="editor-container" style = 'border: 2px solid transparent'> </div>
    
 
<a href="#" class="btn btn-block btn-primary" data-toggle="modal" data-target="#myModal">Laadi faili üles! <span class="glyphicon glyphicon-cloud-upload"></span></a>
<!-- Modal Window -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Konspekti üleslaadimine</h4>
      </div>
      <div class="modal-body">
        <!-- Dropzone -->
<form action="upload.php" class="dropzone"></form>
 </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Sulge</button>
        
      </div>
    </div>
  </div>
</div>

      </div>
    </div>
</div>

      </div>
    </div>
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/lodash.js/2.4.1/lodash.js"></script>
    <script type="text/javascript" src="quill/quill.js"></script>
    <script type="text/javascript" src="quill/examples/scripts/advanced.js"></script>


      <!-- Carousel nav -->
    <a class="carousel-control left" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span></a>
    <a class="carousel-control right" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></a>
    </div>
   
    </div>
  
    </div>
</div>
</div>
<footer><center>
<strong>Powered by <span class = 'glyphicon glyphicon-headphones'></span>Pjotr Leškin</p></strong>
</center></footer>

</body>

</html>
