<?php
	if(isset($_GET['action'])){
		switch($_GET['action']){
			case 'add':
				$masanpham = $_GET['productId'];
				if(isset($_SESSION['cart'])==false){
					$_SESSION['cart'] = array();
				}			
				if(array_key_exists($masanpham, $_SESSION['cart'])){
					if(isset($_POST['number'])){
						$_SESSION['cart'][$masanpham]+=$_POST['number'];
					}else{
						$_SESSION['cart'][$masanpham]+=1;
					}								
				}else{
					if(isset($_POST['number'])){
						$_SESSION['cart'][$masanpham] = $_POST['number'];
					}else{
						$_SESSION['cart'][$masanpham] = 1;
					}
				}
				if(isset($_POST['bien_url'])){
					$diachi = $_POST['bien_url'];
				}else{
					$diachi = "?request=cart";
				}
				header("Location: $diachi");
				break;
			case 'delete':
				$masanpham = $_GET['productId'];
				unset($_SESSION['cart'][$masanpham]);
				header("Location:?request=cart");
				break;
			case 'deleteAll':
				unset($_SESSION['cart']);
				unset($_SESSION['tongsp']);
				header("Location:?request=cart");
				break;
			case 'update':
				foreach(array_keys($_SESSION['cart']) as $key){
					$_SESSION['cart'][$key] = $_POST[$key];
				}
				header("Location:?request=cart");
				break;
		}
	}
	
?>
<div class="cart">
<h1>SHOPPING CART</h1>
<hr>
<?php 
	if(isset($_SESSION['cart']) && $_SESSION['cart']!=null):
	?>
	<form action="?request=cart&action=update" method="post">
	<?php
		$listId = '0';
		foreach(array_keys($_SESSION['cart']) as $key):
			$listId.=','.$key;
		endforeach;
		$query = "select * from product where id in($listId)";
		$ketqua = $connect -> query($query);
		if(mysqli_num_rows($ketqua)>0): ?>
			<table>
				<tr style="height: 30px;line-height: 30px;">
					<th style="width: 20%">Image</th>
					<th style="width: 30%">Product Name</th>
					<th style="width: 15%">Price</th>
					<th style="width: 10%">Number</th>
					<th style="width: 15%">Total</th>
					<th style="width: 10%" colspan="2"></th>
				</tr>
		<?php
			$tongsp = 0;
			foreach($ketqua as $kq): 
				$tongsp+= $_SESSION['cart'][$kq['id']];
				$_SESSION['tongsp'] =  $tongsp;
		?> 
				<tr>
					<td><img src="<?=$kq['image'];?>" alt="" width="100%"></td>
					<td><?=$kq['product_name'] ?></td>
					<td><?=number_format($kq['price']) ?> VNĐ</td>
					<td><input style="width: 70%;text-align: center; padding: 5px;" type="number" name="<?=$kq['id']?>" id="count" value="<?=$_SESSION['cart'][$kq['id']]?>" min='1'></td>
					<td><?=number_format($kq['price']*$_SESSION['cart'][$kq['id']])?> VNĐ</td>
					<td><a onclick="return confirm('Bạn có chắc muốn xóa sản phẩm này!')" href="?request=cart&action=delete&productId=<?=$kq['id']?>" style="color: red"><i class="fa-solid fa-trash" style="font-size: 24px;"></i></a></td>
				</tr>			
		<?php
			endforeach;
		?>
			</table> 
			<br> 
			<br>
			<div style="text-align: center;display: flex; width: 100%; margin-bottom: 50px;">
				<div class="l">
					<a style="background-color: yellow;" href="?request=product"><i class="fa-solid fa-angles-left"></i> Buy more products</a>
				</div>
				<div class="l">
					<button type="submit">Update shopping cart</button>
				</div>
				<div class="l">
					<a style="background-color: red;" onclick="return confirm('Bạn có chắc muốn xóa tất cả sản phẩm!')" href="?request=cart&action=deleteAll">Delete all products</a>
				</div>
				<div class="l">
					<a style="background-color:dodgerblue" href="">PAYMENT</a>
				</div>
			</div>			
		<?php
		endif;
	?>
		</form>
	<?php
	else:
	?>
		<h3 style="color: red;text-align: center;">GIỎ HÀNG RỖNG!</h3>
		<div class="cart-rong">
			<a href="?request=product">Xem sản phẩm</a>
		</div>
		<style>
			.cart-rong{
				text-align: center;
			}
			.cart-rong a{
				display: inline-block;
				text-decoration: none;
				padding: 10px 20px;
				border: none;
				border-radius: 5px;
				background-color: green;
				color: white
			}
			.cart-rong a:hover{
				opacity: 0.6;
			}
		</style>
</div>
<?php
	endif;
?>

<style>
	.cart{
		width: 100%;
	}
	.cart h1{
		text-align: center;
		width: 100%;
		padding: 10px 0px;
	}
	.cart table{
		width: 100%;
		text-align: center;
		border-collapse: collapse;
	}
	.cart td,th{
		border: 1px solid #dddddd;
	}
	.l{
		width: 25%;
	}
	.l a{
		text-decoration: none;
		color: black;
		display: inline-block;
		width: 60%;
		padding: 10px 10px;
		border: none;
		border-radius: 5px;
	}
	.l a:hover{
		opacity: 0.6;
	}
	.l button{
		width: 80%;
		display: inline-block;
		padding: 12px 10px;
		border: none;
		border-radius: 5px;
		background-color: yellowgreen;
		cursor: pointer;
	}
	.l button:hover{
		background-color: green;
	}
	.cart i:hover{
		opacity: 0.6;
	}
</style>