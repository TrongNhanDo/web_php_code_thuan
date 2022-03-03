<div class="header">
	<div class="header_trai">
		<div class="dropdown">
			<a href="?request=home" class="dropbtn"><i class="fa-solid fa-house-user"></i> HOMEPAGE</a>
		</div>
		<div class="dropdown">
			<a class="dropbtn"><i class="fa-brands fa-product-hunt"></i> Products</a>
			<div class="dropdown-content">
				<a href=""><i class="fa-solid fa-angles-right"></i> Name Printing Case</a>
				<a href=""><i class="fa-solid fa-angles-right"></i> Double Case</a>
				<a href=""><i class="fa-solid fa-angles-right"></i> Sketch Print Case</a>
				<a href=""><i class="fa-solid fa-angles-right"></i> Beautiful Personal Image Design Template</a>
				<a href=""><i class="fa-solid fa-angles-right"></i> Chibi Drawing Case</a>
				<a href=""><i class="fa-solid fa-angles-right"></i> Company Logo Print Case</a>
			</div>
		</div>
		<div class="dropdown">
			<a href="?request=about" class="dropbtn"><i class="fa-solid fa-circle-info"></i> About</a>
		</div>
		<div class="dropdown">
			<a href="?request=contact" class="dropbtn"><i class="fa-solid fa-address-card"></i> Contact</a>
		</div>
	</div>
	<div class="header_phai">		
		<div class="dropdown">
			<a href="?request=cart" class="dropbtn"><i class="fa-solid fa-cart-shopping"></i> Cart</a>
		</div>
		<div class="dropdown">
			<a class="dropbtn"><i class="fa-solid fa-user"></i> Account</a>
			<div class="dropdown-content">
			<a href="?request=login">Login</a>
			<a href="?request=register">Register</a>
			</div>
		</div>
		<div class="dropdown">
			<a href="?request=cart" class="dropbtn"><i class="fa-solid fa-magnifying-glass"></i> Search</a>
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

	.dropdown-content {
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
	.header_trai{
		width: 70%;
	}
	.header_phai{
		width: 30%;
	}
	.header_phai > .dropdown{
		float: right;
	}
</style>