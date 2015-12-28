<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">

<head>
  <!-- for QUILL  -->

 <link rel="stylesheet" type="text/css" href="quill/quill.snow.css">
 <link rel="stylesheet" type="text/css" href="quill/examples/styles/advanced.css">
<!-- Bootstrap and JQuery-->
 <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
 <link href="bootstrap/css/navbar-fixed-top.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- Drag-n-Drop client-side script -->
<script src='Dropzone.js' type="text/javascript"></script> 
<!-- Carousel controls -->

<script type="text/javascript">
    $(document).bind('keyup', function(e) {
        if(e.which == 39){
            $('.carousel').carousel('next');
        }
        else if(e.which == 37){
            $('.carousel').carousel('prev');
        }
    });
    $(document).ready(function() {      
   $('#carousel').carousel('pause');
});
</script>

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
<div id="myCarousel" class="carousel slide">

<!-- Carousel items -->
       <div class="carousel-inner">
         <div class="item">  <p class = 'text-center'>Search</p></div>
         
         <div class="item">         <p class = 'text-center'>Some explanation</p>
<!-- upload -->
<?php include_once 'fileUPL/init.php' ?>
         </div>
          <div class=" active item">  <h2 class = 'text-center'>Start writing your first conspect wright now!</h2><br>

<!-- QUILL  TEXT EDITOR --> 
<div class="basic-wrapper"  style = ' width:800px; align:center'>

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
        </div>
<!--QUILL textarea -->
        <div class="editor-container"> </div>






      </div>
      <br>

    </div>
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/lodash.js/2.4.1/lodash.js"></script>
    <script type="text/javascript" src="quill/quill.js"></script>
    <script type="text/javascript" src="quill/examples/scripts/advanced.js"></script>


     
    </div>
  
    </div>
  <!-- Carousel nav -->
    <a class="carousel-control left" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span></a>
    <a class="carousel-control right" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></a>
    </div>
</div>
</div>
<!-- footer -->
<footer><b><p align = 'center'><span class = 'glyphicon glyphicon-arrow-left'></span> For navigation use arrows <span class = 'glyphicon glyphicon-arrow-right'></span></p></b></footer>
</body>

</html>
