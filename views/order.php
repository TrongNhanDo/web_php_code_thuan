<?php
	$query = "select * from users where email = '".$_SESSION['user']."'";
	$user = mysqli_fetch_array($connect->query($query));
?>
<div class="order">
	<h1 style="text-align: center">ORDER</h1> <hr>
	<form action="" method="post">
		<label for="name"><b>Full Name (*)</b></label>
		<input type="text" placeholder="Enter Your Full Name" name="name" id="name" required value="<?=$user['name']?>">

		<label for="phone"><b>Phone (*)</b></label>
		<input type="tel" placeholder="Enter Your Phone" name="phone" id="phone" required pattern="\d{10}" title="Số điện thoại phải đủ 10 số" value="<?=$user['phone']?>">

		<label for="email"><b>Email (*)</b></label>
		<input type="email" placeholder="Enter Email" name="email" id="email" required pattern=".+@.+(\.[a-z]{2,3}){1,2}" value="<?=$user['email']?>">

		<label for="address"><b>Address (*)</b></label>
		<textarea id="address" name="address" style="height:200px"><?=$user['address']?></textarea>

		<input type="submit" value="Cập nhật thông tin">
	</form>
</div>

<style>
	.order input[type=text], input[type=password],input[type=tel],input[type=email],textarea {
		width: 100%;
		padding: 12px 20px;
		margin: 8px 0;
		display: inline-block;
		border: 1px solid #ccc;
		box-sizing: border-box;
		font-family:Arial, Helvetica, sans-serif
	}
	.order input[type=submit]{
		border: none;
		padding: 10px 30px;
		background-color: #007bff;
		font-weight: bold;
		cursor: pointer;
		border-radius: 5px;
	}
	.order input[type=submit]:hover{
		opacity: 0.6;
	}
</style>