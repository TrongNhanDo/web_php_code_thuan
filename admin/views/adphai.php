<?php
	if(isset($_GET['req'])){
		switch($_GET['req']){
			case 'qluser':
				include"./views/qluser.php";
				break;
			case 'qlproduct':
				include"./views/qlproduct.php";
				break;
		}
	}
?>