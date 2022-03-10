<?php
	session_start();
	ob_start();
	$connect = new mysqli("localhost",'root','','shopcase');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Demo PHP</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="./css/style.css">
	<style>
		@media all and (max-width: 740px) {
			html {
				width: 100%;
				font-family: Arial, Helvetica, sans-serif;
			}
			*{
				margin: 0;
				padding: 0;
			}
			.header{
				width: 100%;
			}
			.footer{
				width: 100%;
			}
		}
		@media only screen and (min-width: 740px) {
			html {
				width: 80%;
				margin: auto;
				font-family: Arial, Helvetica, sans-serif;
			}
		}
		@media only screen and (max-width: 1275px){
			.container{
				margin-top: 55px;
			}
		}
	</style>
</head>
<body>
	<div class="main">
		<?php include"layout/header.php" ?>
		<div class="container">
			<?php include"layout/trai.php" ?>
			<?php include"layout/phai.php" ?>
		</div>
		<?php include"layout/footer.php" ?>
	</div>
</body>
</html>