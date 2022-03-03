<div class="phai">
	<?php 
		if(isset($_GET['request'])){
			switch($_GET['request']){
				case 'home':
					include"views/home.php";
					break;
				case 'products':
					include"views/home.php";
					break;
				case 'about':
					include"views/about.php";
					break;
				case 'contact':
					include"views/contact.php";
					break;
				case 'login':
					include"views/login.php";
					break;
				case 'register':
					include"views/register.php";
					break;
				default:
					
					break;
			}
		}else{
			include"views/home.php";
		}
	?>
</div>