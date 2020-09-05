<?php  include 'db.php';
if(isset($_POST['submit'])){
	$question_number = $_POST['question_number'];
	$question_text = $_POST['question_text'];
	$correct_choice = $_POST['correct_choice'];
	// Choice Array
	$choice = array();
	$choice[1] = $_POST['choice1'];
	$choice[2] = $_POST['choice2'];
	$choice[3] = $_POST['choice3'];
	$choice[4] = $_POST['choice4'];
	$choice[5] = $_POST['choice5'];

 // First Query for Questions Table

	$query = "INSERT INTO questions (";
	$query .= "question_number, question_text )";
	$query .= "VALUES (";
	$query .= " '{$question_number}','{$question_text}' ";
	$query .= ")";

	$result = mysqli_query($connection,$query);
	
	//Validate First Query
	if($result){
		foreach($choice as $option => $value){
			if($value != ""){
				if($correct_choice == $option){
					$is_correct = 1;
				}else{
					$is_correct = 0;
				}
			


				//Second Query for Choices Table
				$query = "INSERT INTO options (";
				$query .= "question_number,is_correct,coption)";
				$query .= " VALUES (";
				$query .=  "'{$question_number}','{$is_correct}','{$value}' ";
				$query .= ")";

				$insert_row = mysqli_query($connection,$query);
				// Validate Insertion of Choices

				if($insert_row){
					continue;
				}else{
					die("2nd Query for Choices could not be executed" . $query);
					
				}

			}
		}
		$message = "Question has been added successfully";
	}

	




}

		$query = "SELECT * FROM questions";
		$questions = mysqli_query($connection,$query);
		$total = mysqli_num_rows($questions);
		$next = $total+1;
		

?>
<html>
<head>
	<title>Quiz</title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
              <a href="add.php">
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
			<div class="container">
				<h2>Add A Question</h2>
				<?php if(isset($message)){
					echo "<h4>" . $message . "</h4>";
				} ?>
								
				<form method="POST" action="add.php">
						<p>
							<label>Question Number:</label>
							<input type="number" name="question_number" value="<?php echo $next;  ?>">
						</p>
						<p>
							<label>Question Text:</label>
							<input type="text" name="question_text">
						</p>
						<p>
							<label>Choice 1:</label>
							<input type="text" name="choice1">
						</p>
						<p>
							<label>Choice 2:</label>
							<input type="text" name="choice2">
						</p>
						<p>
							<label>Choice 3:</label>
							<input type="text" name="choice3">
						</p>
						<p>
							<label>Choice 4:</label>
							<input type="text" name="choice4">
						</p>
						<p>
							<label>Choice 5:</label>
							<input type="text" name="choice5">
						</p>
						<p>
							<label>Correct Option Number</label>
							<input type="number" name="correct_choice">
						</p>
						<input type="submit" name="submit" value ="submit">


				</form>
			</div>

	</main>


	
	<footer class="panel-footer">
			<div class="container">
      <div class="row" >
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

<script src="js/jquery-2.1.4.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/script.js"></script>

</body>
</html>