<?php 
	$query ="select * from product where";
	if(isset($_GET['cateId'])){
		$query.=" id_category = ".$_GET['cateId'];
	}
	if(isset($_POST['btnsearch'])){
		$query.=" product_name like '%".$_POST['myInput']."%';";
	}
	$ketqua = $connect -> query($query);
?>

<div class="sea">
	<?php if(mysqli_num_rows($ketqua)==false) : ?>
		<div>The product you are looking for is not available!</div>
	<?php else: ?>
		<?php foreach($ketqua as $kq):  ?>
		<div class="sea-item">
			<div class="img">
				<a title="<?=$kq['product_name']?>" href=""><img src="<?=$kq['image']?>" alt=""></a>
			</div>
			<p><a href="" class="sea-name"><?=$kq['product_name']?></a></p>
			<p class="sea-price"><?=number_format($kq['price'])?> VNĐ</p>
		</div>
	<?php endforeach; ?>
	<?php endif; ?>
</div>

<style>
	.sea{
		width: 100%;
	}
	.sea-item{
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
	.sea-price{
		color: red;
		text-align: center;
	}
	.sea-name{
		text-decoration: none;
		color :black;
		-webkit-line-clamp: 1;
		-webkit-box-orient: vertical;
		overflow: hidden;
		display: -webkit-box;
	}
	.sea-name:hover{
		color: orange
	}
</style>