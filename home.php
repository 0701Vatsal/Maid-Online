 <!DOCTYPE html>
<html>
<head>
	<title>HOME-MAID4U</title>
	<link rel="stylesheet" type="text/css" href="css/maid.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/trial.js"></script>
    <meta charset="utf-8" name="viewport" content="width=device-width,initial-sclae=1.0">
    <script type="text/javascript">
        function preventBack() { window.history.forward(); }
        setTimeout("preventBack()", 0);
        window.onunload = function () { null };
    </script>
    <style>
    #circle-btn { 
  display: flex;
  align-items: center;
  justify-content: center;
  height: 100vh;
}

.btn-container {
  position: relative;  
}

button {
  border: 0;
  border-radius: 50px;
  color: white;
  background: #5f55af;
  padding: 15px 20px 16px 60px;
  text-transform: uppercase;
  background: linear-gradient(to right, #f72585 50%, #5f55af 50%);
  background-size: 200% 100%;
  background-position: right bottom;
  transition:all 2s ease;
}

svg {
  background: #f72585;
  padding: 8px;
  border-radius: 50%;
  position: absolute;
  left: 0;
  top: 0%;
}

button:hover {
   background-position: left bottom;
}
    </style>
</head>
<body>
  <nav class="navbar headings" id="heading" >
    <div class="container">
      <div class="navbar-header">
        <img src="resource/hlogo2.png" alt="header logo" class="logo">
      </div>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="home.php" id="header" class="b1">HOME</a></li>
        <li><a href="findhelper.php" id="header" class="b1">FIND HELPER</a></li> 
        <li><a href="aboutus.php" id="header" class="b1">ABOUT US</a></li>
        <li><a href="emp_login.php" id="header" class="b1" >LOGOUT</a></li>
      </ul>
    
</nav>
  <div class="image-container">  
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner">
        <div class="item active">
          <img src="resource/slideshow1.jpg" alt="Los Angeles" style="width:100%;">
        </div>

        <div class="item">
          <img src="resource/slideshow1.png" alt="Chicago" style="width:100%;">
        </div>
      
        <div class="item">
          <img src="resource/slideshow2.jpg" alt="New york" style="width:100%;">
        </div>
      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div> 

<div class="counter">
    <div class="row">
    <div class="column">
      <div class="card">
        <img src="resource/maid.png">
        <h3>3998</h3>
        <p>Total Helpers</p>
      </div>
    </div>

    <div class="column">
      <div class="card">
        <img src="resource/human.png">
        <h3>3088</h3>
        <p>Hired Helpers</p>
      </div>
    </div>

    <div class="column">
      <div class="card">
        <img src="resource/satisfied.png">
        <h3>2500+</h3>
        <p>Happy Clients</p>
      </div>
    </div>

    <div class="column">
      <div class="card">
        <img src="resource/recruitment.png">
        <h3>3000+</h3>
        <p>Jobs Created</p>
      </div>
    </div>
  </div>
  </div> 
  <h1 align="center"> ENTER YOUR REVIEW HERE</h1>
  <form action="customerreview1.php" align="center">
    <div class="button2"><button type="submit">Customer Review</button></div>
          </form>
  <footer>
    <div class="footer" id="foot" >
    &copy;COPYRIGHT BY FIND MAID ONLINE
    </div>
    <ul>
        <li><a href="https://facebook.com" data-tooltip="facebook"><i class="fab fa-facebook-f"></i></a></li>
        <li><a href="https://instagram.com"><i class="fab fa-instagram"></i></a></li>
        <li><a href="https://gmail.com"><i class="far fa-envelope"></i></a></li>
        <li><a href="https://linkedin.com"><i class="fab fa-linkedin-in"></i></a></li>
    </ul>
  </footer>


</body>
</html>
