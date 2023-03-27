<!DOCTYPE html>
<html>
<head>
	<title>Feedback Form</title>
	<style>
	
		*, *:before, *:after {
			-moz-box-sizing: border-box;
			-webkit-box-sizing: border-box;
			box-sizing: border-box;
		}

		body {
		  font-family: 'Nunito', sans-serif;
		  color: #384047;
		}

		form {
		  max-width: 300px;
		  margin: 10px auto;
		  padding: 10px 20px;
		  background: #f4f7f8;
		  border-radius: 8px;
		}

		h1 {
		  margin: 0 0 30px 0;
		  text-align: center;
		}

		input[type="text"],
		input[type="email"],
		textarea,
		select {
		  background: rgba(255,255,255,0.1);
		  border: none;
		  font-size: 16px;
		  height: auto;
		  margin: 0;
		  outline: 0;
		  padding: 15px;
		  width: 100%;
		  background-color: #e8eeef;
		  color: #8a97a0;
		  box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
		  margin-bottom: 30px;
		}

		select {
		  padding: 6px;
		  height: 32px;
		  border-radius: 2px;
		}

		button {
		  padding: 19px 39px 18px 39px;
		  color: #FFF;
		  background-color: #4bc970;
		  font-size: 18px;
		  text-align: center;
		  font-style: normal;
		  border-radius: 5px;
		  width: 100%;
		  border: 1px solid #3ac162;
		  border-width: 1px 1px 3px;
		  box-shadow: 0 -1px 0 rgba(255,255,255,0.1) inset;
		  margin-bottom: 10px;
		}

		label {
		  display: block;
		  margin-bottom: 4px;
		  margin-top: 10px;
		}

		label.light {
		  font-weight: 300;
		  display: inline;
		}


		@media screen and (min-width: 300px) {

		  form {
			max-width: 480px;
		  }

		}
	</style>
</head>
<body>
	<form method="POST" action="thankyou.php">
		<label for="name">Name:</label><br>
		<input type="text" name="name"><br>
		
		<label for ="email">Email:</label><br>
		<input type="email" name="email"><br>
		
		<label for="type">Type:</label><br>
		<select name="type">
			<option value="inquiry">Inquiry</option>
			<option value="feedback">Feedback</option>
			<option value="other">Other</option>
		</select><br>
		
		<label for="satisfaction_level">Level of Satisfaction:</label><br>
		<input type="range" name="satisfaction_level" min="0" max="10"><br>
		
		<label for="message">Feedback Message:</label><br>
		<textarea name="message"></textarea><br>

		 <button type="submit">Submit</button>
		

	</form> 
</body>
</html>