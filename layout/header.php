<?php 
	if(!isset($_SESSION['tongsp'])){
		$_SESSION['tongsp'] = 0;
	}
?>
<div class="header" id="header">
	<div class="header_trai">
		<div class="dropdown">
			<a href="?request=home" class="dropbtn"><i class="fa-solid fa-house-user"></i> HOMEPAGE</a>
		</div>
		<div class="dropdown">
			<a href="?request=product" class="dropbtn"><i class="fa-brands fa-product-hunt"></i> Collection</a>
			<div class="dropdown-content">
				<a href="?request=search&cateId=1"><i class="fa-solid fa-angles-right"></i> Name Printing Case</a>
				<a href="?request=search&cateId=2"><i class="fa-solid fa-angles-right"></i> Double Case</a>
				<a href="?request=search&cateId=3"><i class="fa-solid fa-angles-right"></i> Sketch Print Case</a>
				<a href="?request=search&cateId=4"><i class="fa-solid fa-angles-right"></i> Beautiful Personal Image Design Template</a>
				<a href="?request=search&cateId=5"><i class="fa-solid fa-angles-right"></i> Chibi Drawing Case</a>
				<a href="?request=search&cateId=6"><i class="fa-solid fa-angles-right"></i> Company Logo Print Case</a>
			</div>
		</div>
		<div class="dropdown">
			<a href="?request=about" class="dropbtn"><i class="fa-solid fa-circle-info"></i> About</a>
		</div>
		<div class="dropdown">
			<a href="?request=contact" class="dropbtn"><i class="fa-solid fa-address-card"></i> Contact</a>
		</div>		
		<div class="dropdown">
			<form action="?request=search" method="post">
				<input type="text" name="myInput" id="myInput" onkeyup="" placeholder="Search for names.." value="">
				<button type="submit" name="btnsearch"><i class="fa-solid fa-magnifying-glass"></i></button>
			</form>
		</div>
		<div class="dropdown">
			<a class="dropbtn"><i class="fa-solid fa-user"></i> Account</a>
			<!-- Kiểm tra xem người dùng đăng nhập chưa -->
			<div class="dropdown-content">
				<!-- Nếu chưa đăng nhập thành hiện nút login vs register -->
				<?php if(!isset($_SESSION['user'])): ?>
				<a href="?request=login">Login</a>
				<a href="?request=register">Register</a>
				<?php else: ?>
				<!-- Nếu đăng nhập rồi thì hiện nút account manage vs logout -->
				<a href="?request=account_manage">
					<?=$_SESSION['user']?> 
				</a>
				<a href="?request=logout">Logout</a>
				<?php endif; ?>
			</div>
		</div>		
		<div class="dropdown">
			<a  href="?request=cart" class="dropbtn"><i class="fa-solid fa-cart-shopping"></i> Cart (<?=$_SESSION['tongsp']?>)</a>
		</div>
	</div>
</div>
<style>
	.dropbtn {
		display: block;
		background-color: #4CAF50;
		color: white;
		padding: 14px 20px;
		font-size: 16px;
		border: none;
		cursor: pointer;
		text-decoration: none;
	}

	.dropdown {
		position: relative;
		display: inline-block;
	}
	.dropdown form{
		margin-left: 10px;
	}

	.dropdown-content {
		z-index: 10;
		display: none;
		position: absolute;
		background-color: #f9f9f9;
		min-width: 200px;
		box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
	}

	.dropdown-content a {
		color: black;
		padding: 12px 16px;
		text-decoration: none;
		display: block;
	}

	.dropdown-content a:hover {background-color: lightgrey}

	.dropdown:hover .dropdown-content {
		display: block;
	}

	.dropdown:hover .dropbtn {
		background-color: #3e8e41;
		color: white
	}
	#myInput {
		width: 60%;
		font-size: 16px;
		padding: 5px 10px;
		border: 1px solid #ddd;
		margin-top: 8px;
	}
	.dropdown button{
		padding: 7px 10px;
	}
</style>