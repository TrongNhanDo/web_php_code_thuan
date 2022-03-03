<div class="phai">
	<?php 
		if(isset($_GET['request'])){
			switch($_GET['request']){
				case 'home':
					include"views/home.php";
					break;
				case 'product':
					include"views/product.php";
					break;
				case 'about':
					include"views/about.php";
					break;
				case 'contact':
					include"views/contact.php";
					break;
				case 'search':
					include"views/search.php";
					break;
				case 'login':
					include"views/login.php";
					break;
				case 'register':
					include"views/register.php";
					break;
				case 'logout':
					unset($_SESSION['user']);
					echo "<script>location.href = '.';</script>";
					break;
			}
		}else{
			include"views/home.php";
		}
	?>
</div>

<style>
	.phai{
		margin-top: 55px;
		margin-bottom: 74px;
		min-height: 800px;
	}
</style>