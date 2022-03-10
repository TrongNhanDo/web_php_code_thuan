<?php
	$query ="select * from product where";
	if(isset($_GET['productId'])){
		$query.=" id = ".$_GET['productId'];
	}
	$ketqua = $connect -> query($query);
?>
<div class="detail">
	<?php if(mysqli_num_rows($ketqua)==false) : ?>
		<div>
			<h3>The product you are looking for is not available!</h3>
		</div>
	<?php else: ?>
		<?php foreach($ketqua as $kq):  ?>
		<div class="detail">
			<div class="d1">
			<a target="_blank" href="<?=$kq['image']?>">
				<img src="<?=$kq['image']?>" alt="">
  			</a>				
			</div>
			<div class="d2">
				<h1><?=$kq['product_name']?></h1>
				<h2><?=number_format($kq['price'])?> VNĐ</h2>
				<h3>Description: <?=$kq['description']?></h3>
				<h3>Status: 
					<?php
						if($kq['status']==1){
							echo "Còn hàng";
						}else{
							echo "Hết hàng";
						}
					?>
				</h3> <br>
				<form action="?request=cart&action=add&productId=<?=$kq['id'] ?>" method="post">
					<label for="num">Number :</label>
					<input type="number" name="number" value="1" min="1"> <br>  <br>
					<?php
						if($kq['status']==1):
					?>
						<input  type="submit" value="Add to cart">
						<input name="bien_url" type="hidden" value="<?=$_SERVER['REQUEST_URI'] ?>">
					<?php
						else:		
					?>
						<div class="label_hethang">Hết hàng</div>
					<?php endif; ?>			
				</form>
			</div>
		</div>
	<?php endforeach; ?>
	<?php endif; ?>
</div>
<style>
	.detail{
		width: 100%;
		display: flex;
	}
	.d1, .d2{
		width: 50%;
	}
	.d1 {
		overflow: hidden;
	}
	.d1 img{
		width: 100%;
	}
	.d1:hover img{
		transform: scale(1.3);
	}
	.d2 {
		padding-left: 30px;
	}
	.d2 h2{
		color: red
	}
	.d2 input:hover{
		opacity: 0.7;
	}
	.d2 input[type=submit]{
		padding: 10px 40px;
		font-size: 20px;
		background-color: #D26E4B;
		border: none;
		border-radius: 5px;
		cursor: pointer;
	}
	.d1 img {
		width: 100%;
		height: auto;
	}
	.d2 label{
		font-size: 20px;
		font-weight: bold;
	}
	.d2 input[type=number]{
		font-size: 20px;
		width: 30%;
	}
	.label_hethang{
		width: 100px;
		text-align: center;
		display: block;
		padding: 10px 30px;
		background-color: red;
		font-weight: bold;
		font-size: 20px;
	}
</style>