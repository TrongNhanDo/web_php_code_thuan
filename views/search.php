<?php 
	$query ="select * from product ";
	if(isset($_GET['cateId'])){
		$query.="where id_category = ".$_GET['cateId'];
	}
	if(isset($_GET['price'])){
		$_SESSION['price-value'] = $_GET['price'];
		switch($_GET['price']){
			case 'the-price-goes-up':
				$query.="order by price ASC"; break;
			case 'price-descending':
				$query.="order by price DESC";
				break;
			case 'left50k':
				$query.="where price < 51000";
				break;
			case '50kto150k':
				$query.="where price between 50000 and 151000";
				break;
			case '151kto300k':
				$query.="where price between 151000 and 301000";
				break;
			case 'right301k':
				$query.="where price > 300000 ";
				break;
		}
	}
	if(isset($_POST['btnsearch'])){
		$query.="where product_name like '%".$_POST['myInput']."%';";
	}
	$ketqua = $connect -> query($query);
?>

<div class="sea">
	<?php if(mysqli_num_rows($ketqua)==false) : ?>
		<div>
			<h3>The product you are looking for is not available!</h3>
		</div>
	<?php else: ?>
		<?php foreach($ketqua as $kq):  ?>
		<div class="sea-item">
			<div class="img">
				<a title="<?=$kq['product_name']?>" href="?request=detail&productId=<?=$kq['id']?>"><img src="<?=$kq['image']?>" alt=""></a>
			</div>
			<p><a href="?request=detail&productId=<?=$kq['id']?>" class="sea-name"><?=$kq['product_name']?></a></p>
			<p class="sea-price"><?=number_format($kq['price'])?> VNĐ</p>
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
		text-align: center;
	}
	.sea-name:hover{
		color: orange
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