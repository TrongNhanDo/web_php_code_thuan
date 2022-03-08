<?php 
	function login(){
		global $connect;
		if(isset($_POST['submit'])){
			$username = $_POST['username'];
			$password = md5($_POST['password']);
			$query = "select * from users where email='$username' and password='$password'";
			$ketqua = $connect -> query($query);
			if(mysqli_num_rows($ketqua)==false){
				return "Tên đăng nhập hoặc mật khẩu không đúng!";
			}else{
				if($username=='admin@gmail.com'){
					echo "<script>location.href='/web_php_code_thuan/admin/admin.php'</script>";
				}else{
					$_SESSION['user'] = $username;	
					header(("Location: ./"));
				}				
			}
		}
		return "";
	}
	$alert = login();
?>

<div class="login">
	<form method="post">
		<h1>LOGIN</h1> <hr>
		<?php echo "<h4 style='text-align: center; color: red'>".$alert."</h4>"; ?>
		<div class="contai">
			<label for="username"><b>Username</b></label>
			<input type="text" placeholder="Enter Username" name="username" required>

			<label for="password"><b>Password</b></label>
			<input type="password" placeholder="Enter Password" name="password" required >
				
			<input class="button" type="submit" name="submit" value="Login">
			<span class="psw">Forgot password? <a href="?request=register">Register</a> here</span>
		</div>
	</form>
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
.login form {
	border: 3px solid #f1f1f1;
	width: 80%;
	margin: auto;
}

.login input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

.login button, .button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

.login button:hover {
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