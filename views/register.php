<?php
	function register(){
		global $connect;
		if(isset($_POST['register'])){
			$name = $_POST['name'];
			$phone = $_POST['phone'];
			$email = $_POST['email'];
			$query = "select * from users where email='$email'";
			$ketqua = $connect->query($query);		
			$pass = md5($_POST['password']);
			$address = $_POST['address'];
			if(mysqli_num_rows($ketqua)!=false){
				echo "<script>alert('Email đã được đăng ký trước đó');</script>";
			}else{
				$query ="insert users(name,email,password,phone,address) values('$name','$email','$pass','$phone','$address')";
				$connect -> query($query);
				echo "<script>alert('Đăng ký thành công!');</script>";
				echo "<script>location.href = '/web_php_code_thuan/?request=login';</script>";
			}	
		}
	}
	register();
?>
<div class="register">
	<form method='POST'>
		<div class="contai">
			<h1>Register</h1>
			<!-- <?php echo "<h4 style='text-align: center; color: red'>".$alert."</h4>"; ?> -->
			<hr>
			<label for="name"><b>Full Name (*)</b></label>
			<input type="text" placeholder="Enter Your Full Name" name="name" id="name" required value="<?=isset($name)?$name: ''?>">

			<label for="phone"><b>Phone (*)</b></label>
			<input type="tel" placeholder="Enter Your Phone" name="phone" id="phone" required pattern="\d{10}" title="Số điện thoại phải đủ 10 số" value="<?=isset($phone)?$phone: ''?>">

			<label for="email"><b>Email (*)</b></label>
			<input type="email" placeholder="Enter Email" name="email" id="email" required pattern=".+@.+(\.[a-z]{2,3}){1,2}" value="<?=isset($email)?$email: ''?>">

			<label for="password"><b>Password (*)</b></label>
			<input type="password" placeholder="Enter Password" name="password" id="password" required pattern=".{6,}" title="Mật khẩu phải từ 8-16 ký tự">

			<label for="re-password"><b>Confirm Password (*)</b></label>
			<input type="password" placeholder="Confirm Password" name="re-password" id="re-password" required title="Mật khẩu phải từ 8-16 ký tự" oninput="checkPass()">
			<span id="checkPass" style="color: red"></span> <br> <br>
			<script>
				function checkPass(){
					var pass1 = document.getElementById('password').value
					var pass2 = document.getElementById('re-password').value
					if(pass1!= pass2){
						document.getElementById("checkPass").innerHTML = "Confirm password incorrect!"
					}else{
						document.getElementById("checkPass").innerHTML = ""
					}
				}
			</script>
			
			<label for="address"><b>Address (*)</b></label>
			<textarea placeholder="Enter Your Address" name="address" id="address" required rows="3"><?=isset($address)?$address: ''?></textarea>
			*Lưu ý : (*) là dữ liệu bắt buộc phải nhập
			<hr>
			<p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

			<input type="submit" name="register" value="Register" class="registerbtn">
		</div>
	
		<div class="contai signin">
			<p>Already have an account? <a href="?request=login">Sign in</a>.</p>
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

.register input[type=text], input[type=password],input[type=tel],input[type=email],textarea {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Overwrite default styles of hr */
.register hr {
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
.register a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>