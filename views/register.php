<div class="register">
	<form action="/action_page.php">
		<div class="contai">
			<h1>Register</h1>
			<p>Please fill in this form to create an account.</p>
			<hr>

			<label for="email"><b>Email</b></label>
			<input type="text" placeholder="Enter Email" name="email" id="email" required>

			<label for="psw"><b>Password</b></label>
			<input type="password" placeholder="Enter Password" name="psw" id="psw" required>

			<label for="psw-repeat"><b>Repeat Password</b></label>
			<input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required>
			<hr>
			<p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

			<button type="submit" class="registerbtn">Register</button>
		</div>
	
		<div class="contai signin">
			<p>Already have an account? <a href="#">Sign in</a>.</p>
		</div>
	</form>
</div>

<style>
.register{
	width: 100%;
	box-sizing: border-box;
}
.register h1,p{
	text-align: center;
}
.register form{
	border: 3px solid #f1f1f1;
	width: 80%;
	margin: auto;
}
.contai {
	padding: 16px;
	background-color: white;
}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>