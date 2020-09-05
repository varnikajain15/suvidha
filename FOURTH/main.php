<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Suvidha</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link href='https://fonts.googleapis.com/css?family=Oxygen:400,300,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lora' rel='stylesheet' type='text/css'>

  </head>
<body>
  <header>
    <nav id="header-nav" class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <a href="main.php" class="pull-left visible-md visible-lg">
            <div id="logo-img"></div>
          </a>
         

          <div class="navbar-brand">
            <a href="index.php"><h1>Suvidha</h1></a>
            <p>
              
              <span>Your Online Study Partner</span>
            </p>
          </div>

          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapsable-nav" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div id="collapsable-nav" class="collapse navbar-collapse">
           <ul id="nav-list" class="nav navbar-nav navbar-right">
            <li class="visible-xs active">
              <a href="main.php">
                <span class="glyphicon glyphicon-home"></span> Home</a>
            </li>
            
            <li>
              <a href="about.html">
                <span class="glyphicon glyphicon-info-sign"></span><br class="hidden-xs"> About</a>
            </li>
            <li>
              <a href="#platforms">
                <span class="glyphicon glyphicon-tasks"></span><br class="hidden-xs"> Platforms</a>
            </li>
            <li>
              <a href="#contact">
                <span class="glyphicon glyphicon-envelope"></span><br class="hidden-xs"> Contact Us</a>
            </li>
            <li>
                <a href="login.html">
                    <span class="glyphicon glyphicon-log-in"></span><br class="hidden-xs"> Login</a>
            </li>
        
          </ul><!-- #nav-list -->
        </div><!-- .collapse .navbar-collapse -->
      </div><!-- .container -->
    </nav><!-- #header-nav -->
  </header>

  
  

  <div id="main-content" class="container">
    <section>
  <img class="mySlides" src="images/img_s.jpg" style="width:100%">
  <img class="mySlides" src="images/img2.jpg" style="width:100%">
  <img class="mySlides" src="images/img3.jpg" style="width:100%">
</section>

<script>
// Automatic Slideshow - change image every 3 seconds
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}
  x[myIndex-1].style.display = "block";
  setTimeout(carousel, 3000);
}
</script>
<div id="Platforms" class="row">
      <h2> <a name="platforms"></a><b> Platforms </b></h2> 
      <br>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <a href="index.php"><div id="quiz"><span>Quiz</span></div></a>
      </div>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <a href="index.html"><div id="poll"><span>Poll</span></div></a>
      </div>
    
  

      
    </div>
  </div><!-- End of #main-content -->

  <footer class="panel-footer">
    <div class="container">
      <div class="row">
        <section id="contact" class="col-sm-4">
          <span>Contact Us:</span><a name="contact"></a><br>
          
          Midhat Fatima <br>
          Email-id  : midhatfatima711@gmail.com<br>
          Phone No. : +91-8755507896<br>
          <br>  
          Varnika Jain<br>
          Email-Id  : varnikajain561@gmail.com<br>
          Phone No. : +91-8755916141
          <hr class="visible-xs">
        </section>
        <section id="address" class="col-sm-4">
          <span>Address:</span><br>
          Meerut<br>
          
          <hr class="visible-xs">
        </section>
        <section id="testimonials" class="col-sm-4">
          <p>"The secret to getting ahead is getting started."</p>
          <p>"The cure for boredom is curiosity. There is no cure for curiosity"</p>
        </section>
      </div>
      
  </footer>

  <!-- jQuery (Bootstrap JS plugins depend on it) -->
  <script src="js/jquery-2.1.4.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/script.js"></script>

</body>
</html>