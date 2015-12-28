 
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="bootstrap/css/navbar-fixed-top.css" rel="stylesheet">
<script src="bootstrap/js/ie-emulation-modes-warning.js"></script>
     <!-- navbar before logged in -->
    <nav class="navbar navbar-default navbar-fixed-top navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php"><b>TLU konspektid</b></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li ><a href="/index.php">Kodu</a></li>
            <li><a href="#about">Rohkem</a></li>
            <li class="active"><a href="kontakt.php" id = 'kontakt'>Kontakt</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
          </ul>
          <nav class= 'navbar navbar-form navbar-right'>
          <div class = 'form-group'>
          	<input class = 'form-control' type ='text' placeholder = 'kasutajanimi' id = 'username'> </input>
          </div>
          	<div class = 'form-group'>
          		<input class = 'form-control' type = 'password' placeholder = 'password' id = 'password'></input>
          	</div>
          	<button class ='btn btn-success' type = 'submit' >Sign in</button>
            <a href = 'register.php'> <button class ='btn btn-success' type = 'submit'>Register</button> </a>
          	</div>

        </div><!--/.nav-collapse -->

      </div>
    </nav>
  


    </div> 