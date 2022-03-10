<?php
	$query = "select * from product";
	$ketqua = $connect -> query($query);
?>
<div class="qlpd">
	<?php if(mysqli_num_rows($ketqua)==false) : ?>
		<div>The product you are looking for is not available!</div>
	<?php else: ?>
		<?php foreach($ketqua as $kq):  ?>
		<div class="qlpd-item">
			<div class="img">
				<a title="<?=$kq['product_name']?>" href="?request=detail&productId=<?=$kq['id']?>"><img src="<?=$kq['image']?>" alt=""></a>
			</div>
			<p><a href="?request=detail&productId=<?=$kq['id']?>" class="qlpd-name"><?=$kq['product_name']?></a></p>
			<p class="qlpd-price"><?=number_format($kq['price'])?> VNĐ</p>
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