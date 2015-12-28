<?php 
session_start(); 
//include_once 'includes/functions.php';
//include_once 'includes/db_connect.php';

//include '/cookies/cookie1.php';

?>



<!DOCTYPE html>
<html xmlns:fb="http://www.facebook.com/2008/fbml">
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="bootstrap/css/navbar-fixed-top.css" rel="stylesheet">
<?php
require_once 'header2.inc.php'; // registration and login <div>
require 'StartSession.php';
?>
<style type="text/css">
body { background: url(bg1.jpg) repeat !important; } /* Adding !important forces the browser to overwrite the default style applied by Bootstrap */
</style>
<link rel="icon" href="favicon.ico" type="image/x-icon"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script>
$(document).ready(function(){ // fade the content in by the load; don't forget about style =display:none
    
        $("#thumbnail1").fadeIn(2000);
        $("#thumbnail2").fadeIn(2000);
        $("#thumbnail3").fadeIn(2000);
        $('#plainer').fadeIn(2000);   
});

//change the link at the navbar to 'active' state when it's clicked
$("#kontakt").on("click", function(){
   $(".navbar").find(".active").removeClass("active");
   $(this).parent().addClass("active");
});
</script>
<title>Konspektid</title>
</head>
<body > 
<?php  include  'FBLoginModal.php' ?>

      <!-- Banner at the top of the site -->
      <div class="jumbotron"  id = 'plainer' style = 'display:none'>
        <h1>Vaheta konspekte vabalt!</h1>
        <h3><b>Kõik ühes kohas.</b></h3>
        <p>Kiire ja võimekas võimalus koosta ja jagada oma teadmisi teistega tudengitega. </p>
       <!-- search-box from outer file-->
        <p><?php require_once 'search.php';?> </p>
        
      </div>

      <!-- news at the bottom of the site -->
<div class='news'>
<div class="row">
 <?php include 'news/thumbnail1.php'; ?>
 <?php include 'news/thumbnail2.php'; ?>
 <?php include 'news/thumbnail3.php'; ?>
</div>
</div>
<div id ='about'>Some text about site <div>
<p>Your browser and system are : </p>
<?php include_once  'UserBrowser.php'; ?>


            <!-- footer with logo -->
   <footer><p align = 'center'> Powered by <span class = 'glyphicon glyphicon-headphones'></span>Pjotr Leškin</p></footer>
</div>


</body>
</html>