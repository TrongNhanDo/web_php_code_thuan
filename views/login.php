<?php 
	$msg ='';
	$tk = '';
	$mk = '';
	if(isset($_POST['submit'])){
		$tk = $_POST['username'];
		$mk = $_POST['password'];
		$query = "select * from users where username= ";
	}
?>

<div class="login">
	<form action="?request=login" method="post">
		<h1>LOGIN</h1> <hr>
		<div class="contai">
			<label for="username"><b>Username</b></label>
			<input type="text" placeholder="Enter Username" name="username" required value="<?php echo $tk ?>">

			<label for="password"><b>Password</b></label>
			<input type="password" placeholder="Enter Password" name="password" required value="<?php echo $mk ?>">
				
			<input class="button" type="submit" name="submit" value="Login">
		</div>
		<div class="contai" style="background-color:#f1f1f1">
			<button onclick="hihi()" type="button" class="cancelbtn">Cancel</button>
			<span class="psw">Forgot password? <a href="#">Register</a> here</span>
		</div>
	</form>
	<script>
		function hihi(){
			alert('hihi')
		}
	</script>
</div>

<style>
.login{
	width: 100%
}
.login h1{
	text-align: center;
	font-weight: bold;
}
.login hr{
	width: 90%;
	margin: auto;
}
form {
	border: 3px solid #f1f1f1;
	width: 80%;
	margin: auto;
}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button, .button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}
.contai {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

</style>