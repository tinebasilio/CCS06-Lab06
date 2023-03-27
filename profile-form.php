<style>
		body {
		  width: 100%;
		  height: 100vh;
		  margin: 0;
		  background-color: #f4f7f8;
		  color: #384047;
		  font-family: Tahoma;
		  font-size: 16px;
		}

		h1,
		p {
		  margin: 1em auto;
		  text-align: center;
		}

		form {
		  width: 60vw;
		  max-width: 500px;
		  min-width: 300px;
		  margin: 0 auto;
		  padding-bottom: 2em;
		}
		
		label {
		  display: block;
		  margin: 0.5rem 0;
		}

		input,
		textarea,
		select {
		  margin: 10px 0 0 0;
		  width: 100%;
		  min-height: 2em;
		}

		input,
		textarea {
		  background-color: rgba(255,255,255,0.1);
		  border: 1px solid #0a0a23;
		  color: #384047;
		}


		input[type="submit"] {
		  color: #ffffff;
		  display: block;
		  width: 60%;
		  margin: 1em auto;
		  height: 2em;
		  font-size: 1.1rem;
		  background-color: #3b3b4f;
		  border-color: white;
		  min-width: 300px;
		}
</style>

<?php

if (isset($_POST['complete_name'])) :
    echo "<hr />";
    echo "<h1>Your Profile</h1>";
		echo "<br>";
    echo "Full name: " . $_POST['complete_name'];
		echo "<br>";
	echo "Birthdate: " . $_POST["birthdate"];
		echo "<br>";
	echo "Email Address: " . $_POST["email"];
		echo "<br>";
	echo "Program: " . $_POST["program"];
		echo "<br>";
	echo "Favorite Color: " . $_POST["favorite_color"];
		echo "<br>";
	echo "Superpower Level: " . $_POST["superpower_level"];
		echo "<br>";
    echo "<hr />";
	
	// Debug
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

else:

?>


<h1>Enter Data</h1>
	<form method="POST" action="profile-form.php">
		Name: <input type="text" name="complete_name" /><br><br>
		Birthdate: <input type="date" name="birthdate" /><br><br>
		Email Address: <input type="email" name="email" /><br><br>
		Program:
			<select name="program">
				<option value="BSCS">B.S. Computer Science</option>
				<option value="BSIT">B.S. Information Technology</option>
				<option value="BSIS">B.S. Information Systems</option>
			</select>
				<br><br>
		Favorite Color: <input type="color" name="favorite_color" /><br><br>
		Superpower Level: <input type="range" name="superpower_level" min="1" max="1000000" step="5000" /><br><br>
		<input type="submit" value="Submit"/>
</form>

<?php
	endif;
?>