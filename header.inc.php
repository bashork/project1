	
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="bootstrap/css/navbar-fixed-top.css" rel="stylesheet">    
<script src="bootstrap/js/ie-emulation-modes-warning.js"></script>
<link href="bootstrap/css/bg.css" rel="stylesheet">
<link href = 'search.css' rel = 'stylesheet'>
<script src = 'search.js'></script>
    
<body>
     <!-- navbar after logged in -->
    <nav class="navbar navbar-default navbar-fixed-top navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="localhost/index.php"><b> TLU konspektid</b></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Kodu</a></li>
            <li><a href="#about">Rohkem</a></li>
            <li><a href="kontakt.php">Kontakt</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Kursused <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li class="dropdown-header">Minu konspektid</li>
                <li role="separator" class="divider"></li>
                <li><a href="#">Kursus1</a></li>
                <li><a href="#">kursus2</a></li>
                <li><a href="#">kursus3</a></li>
                
              </ul>
            </li>

          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="../navbar/">Foto</a></li>
            <li><a href="../navbar-static-top/"><span class ='glyphicon glyphicon-envelope'></span> Teatused</a></li>
            <li class="active"><a href="./"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Profiil <span class="sr-only">(current)</span></a></li>

<li><a href='#search'><span class = 'glyphicon glyphicon-search'></span> Search</a></li>
<div id="search">
    <button type="button" class="close">×</button>
    <form>
    <h3>Otsi...</h3>
        <input type="search" value="" placeholder="type keyword(s) here" />
        <button type="submit" class="btn btn-success">otsi!</button>
    </form>
</div>
            <li id = 'logout'><a href="index.php"> <span class ='glyphicon glyphicon-fire'></span> Logout</a></li>
          </ul>
        </div><!--/.nav-collapse -->

      </div>
    </nav>



    
 


