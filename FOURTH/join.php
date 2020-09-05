<?php 
include 'db.php';
$query = "SELECT * FROM questions";
$total_questions = mysqli_num_rows(mysqli_query($connection,$query));


?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Quiz</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
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
            <a href="main.php"><h1>Suvidha</h1></a>
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
              <a href="join.php">
                <span class="glyphicon glyphicon-home"></span> Home</a>
            </li>
            
            <li>
              <a href="about.html">
                <span class="glyphicon glyphicon-info-sign"></span><br class="hidden-xs"> About</a>
            </li>
            <li>
              <a href="main.php">
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


	<main>
			<div class="container" id="text">
				<h2>Test Your PHP Knowledge</h2>
				<p>
					This is a multiple choise quiz to test your PHP Knowledge.
				</p>
				<ul>
					<li><strong>Number of Questions:</strong>  <?php echo $total_questions; ?> <br></li>
					<br>
					<li><strong>Type:</strong> Multiple Choice<br></li>
					<br>
					<li><strong>Estimated Time: </strong>  <?php echo $total_questions*1.5; ?><br></li>

				</ul>

				<a href="question.php?n=1" class="start">Start Quiz</a>

			</div>

	</main>


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
      <script src="js/jquery-2.1.4.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/script.js"></script>


	</footer>
