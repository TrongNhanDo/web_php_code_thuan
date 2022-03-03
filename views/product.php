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
				<a title="<?=$kq['product_name']?>" href=""><img src="<?=$kq['image']?>" alt=""></a>
			</div>
			<p><a href="" class="pd-name"><?=$kq['product_name']?></a></p>
			<p class="pd-price"><?=number_format($kq['price'])?> VNĐ</p>
			<a class="btn-order" href="">Order</a>
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
</style>