
<div class="trai">
	<h4><a href="?request=thanks-to-desin">THANKS TO DESIGN</a></h4>	
	<h4><a href="?request=product">COLLECTION <i class="fa-solid fa-square-caret-down"></i></a></h4>
	<ul>		
		<li ><a href="?request=search&cateId=1"><i class="fa-solid fa-angles-right"></i> Name Printing Case</a></li>
		<li ><a href="?request=search&cateId=2"><i class="fa-solid fa-angles-right"></i> Double Case</a></li>
		<li ><a href="?request=search&cateId=3"><i class="fa-solid fa-angles-right"></i> Sketch Print Case</a></li>
		<li ><a href="?request=search&cateId=4"><i class="fa-solid fa-angles-right"></i> Beautiful Personal Image Design Template</a></li>
		<li ><a href="?request=search&cateId=5"><i class="fa-solid fa-angles-right"></i> Chibi Drawing Case</a></li>
		<li ><a href="?request=search&cateId=6"><i class="fa-solid fa-angles-right"></i> Company Logo Print Case</a></li>
	</ul>
	<h4><a href="?request=design-yourself">DESIGN YOURSELF</a></h4>	
	<h4>WHOLESALERS & BUSINESSES <i class="fa-solid fa-square-caret-down"></i></h4>
	<ul>		
		<li><a href="?request=wholesalers"><i class="fa-solid fa-angles-right"></i> For Wholesalers</a></li>
		<li><a href="?request=business"><i class="fa-solid fa-angles-right"></i> For Businesses</a></li>
	</ul>	
	<h4><a href="?request=blog">BLOG</a></h4>
	<h4><a href="?request=contact">CONTACT</a></h4> <hr style="width: 90%">
	<div class="search-price">
		<h4>SEARCH BY PRICE</h4>
		<select id="price_key" onchange="genderChanged()">
            <option value="">Select the price to filter</option>
            <option value="the-price-goes-up">The price goes up</option>
            <option value="price-descending">The price descending</option>
            <option value="left50k"> <50.000Đ</option>
            <option value="50kto150k">50.000Đ-150.000Đ</option>
            <option value="151kto300k">150.000Đ-300.000Đ</option>
            <option value="right301k">>300.000Đ</option>
        </select>
		<script>
			function genderChanged(){
				let giatri = document.getElementById('price_key').value
				location.href = '/web_php_code_thuan/?request=search&price='+giatri
			}
		</script>
	</div>
	
</div>

<style>
	.trai{
		background-color: #f1f1f1;
		margin-top: 55px;
		margin-bottom: 80px;
	}
	.trai h4{
		padding-left: 15px;
	}
	.trai h4 a{
		text-decoration: none;
		color: black
	}
	.trai h4 a:hover{
		color: orange;
	}
	.trai ul{
		list-style-type: none;
		margin: 0;
		padding-left: 10px;
	}
	.trai ul li{
		padding-left: 30px;
	}
	.trai ul li a{
		text-decoration: none;
		color: black;
		display: block;
		padding: 10px 0px ;
	}
	.trai ul li a:hover, .orange{
		color: orange;
	}
	.search-price{
		width: 100%;
	}
	.search-price h4,select{
		float: left;
	}
	.search-price select{
		width: 90%;
		height: 30px;
		margin-top: 13px;
		margin-left: 10px;
	}
	@media only screen and (max-width: 1275px) {
		.trai{
			padding-top: 10px;
		}
	}
</style>
