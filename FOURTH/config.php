				<?php

				$hostname="localhost";
				$username= "root";
				$password= "";
				$database="quiz";

				// UserInput Test
					function test_input($data) {
					  $data = trim($data);
					  $data = stripslashes($data);
					  $data = htmlspecialchars($data);
					
					  return $data;
					}	

								

?>