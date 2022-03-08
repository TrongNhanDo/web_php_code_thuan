<?php 
	$query = "select * from product";
	$ketqua = $connect -> query($query);
?>
<div class="pd">
	<?php if(mysqli_num_rows($ketqua)==false) : ?>
		<div>The product you are looking for is not available!</div>
	<?php else: ?>
		<?php foreach($ketqua as $kq):  ?>
		<div class="pd-item">
			<div class="img">
				<a title="<?=$kq['product_name']?>" href="?request=detail&productId=<?=$kq['id']?>"><img src="<?=$kq['image']?>" alt=""></a>
			</div>
			<p><a href="?request=detail&productId=<?=$kq['id']?>" class="pd-name"><?=$kq['product_name']?></a></p>
			<p class="pd-price"><?=number_format($kq['price'])?> VNĐ</p>
			<form action="?request=cart&action=add&productId=<?=$kq['id'] ?>" method="post" style="width: 100%;text-align: center;">
				<input type="number" name="num" value="1" style="display:none">	
				<?php if($kq['status']==1): ?>
					<input id="add" name="addtocart" type="submit" value="Add to cart">
				<?php else: ?>
					<div class="fm-hethang">
						<div class="hethang">Hết hàng</div>
					</div>
				<?php endif; ?>	
					
			</form>
		</div>
	<?php endforeach; ?>
	<?php endif; ?>
</div>

<style>
	.pd{
		width: 100%;
	}
	.pd-item{
		width: 23%;
		float: left;
		margin-right: 2%;
		margin-bottom: 20px;
	}
	.img{
		width: 100%;
		border: solid 1px lightgray;
	}
	.img img{
		width: 100%;
	}
	.pd-price{
		color: red;
		text-align: center;
	}
	.pd-name{
		text-align: center;
		text-decoration: none;
		color :black;
		-webkit-line-clamp: 1;
		-webkit-box-orient: vertical;
		overflow: hidden;
		display: -webkit-box;
	}
	.pd-name:hover{
		color: orange
	}
	.btn-order{
		padding: 5px 0px;
		text-align: center;
		display: block;
		text-decoration: none;
		background-color: #4CAF50;
	}
	#add{
		padding: 5px 20px;
		background-color: #4CAF50;
		border: none;
		cursor: pointer;
	}
	#add:hover{
		opacity: 0.6;
	}
	.fm-hethang{
		text-align: center;
	}
	.hethang{
		background-color: red;
		width: 100px;
		padding: 4px 0px;
		display: inline-block;
	}
</style>