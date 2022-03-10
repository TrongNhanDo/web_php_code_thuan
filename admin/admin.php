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
	<title>Admin</title>
	<link rel="stylesheet" href="./css/admin.css">
</head>
<body>
	<div class="admin">
		<?php
			if(isset($_SESSION['admin'])):
		?>
		<div class="adheader">
			<div class="logo">
				<a href="">DAUCATMOI</a>
				<hr>
			</div>
			<div class="item"><a href="?req=qluser">Users Management</a></div>
			<div class="item"><a href="?req=qlproduct">Product Management</a></div>			
			<div class="item"><a href="">Category Management</a></div>
			<div class="item"><a href="">Order Management</a></div>
			<div class="item">
				<hr>	
				<a style="margin-top: 10px;" href="">Logout</a>
			</div>
		</div>
		<div class="adcontainer">
			<?php include"./views/adphai.php"; ?>
		</div>
		<?php else: include"./views/loginadmin.php"; endif; ?>	
	</div>
</body>
<style>html {
    padding: 0;
    margin: 0;
    width: 100%;
}

.adheader {
    position: fixed;
    height: 100%;
    width: 20%;
    background-color: pink;
    left: 0;
    top: 0;
}

.adcontainer {
    margin-left: 20%;
    width: 80%;
}
.adheader a {
    text-decoration: none;
	display: block;
	color: black
}
.logo hr{
	width: 80%;
	margin: auto;
	height: 3px;
	background-color: black;
}
.logo a{
	width: 100%;
	text-align: center;
	font-size: 100%;
	font-weight: bold;
	font-size: 24px;
	padding: 30px 0px;
}
.item {
	padding: 10px 0px;
	width: 90%;
	margin: auto;
}
.item a{
	padding: 10px 20px;
	font-size: 18px;
	font-weight: bold;
}
.item a:hover{
	background-color: yellow;
}
.item hr{
	width: 80%;
	margin: auto;
	height: 3px;
	background-color: black;
}
</style>
</html>