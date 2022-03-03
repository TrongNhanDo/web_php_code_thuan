<div class="home">
	<div class="vd">
		<video src="../public/video/tranh_khuyet.mp4" controls muted autoplay>
		</video>
	</div>
	<div class="item">
		<div class="img-container">
			<a href="">
				<img src="https://pdp.edu.vn/wp-content/uploads/2021/06/hinh-anh-suy-tu-1.jpg" alt="">
				<h3>DESIGN YOURSELF</h3>
			</a>
		</div>
		<div class="img-container">
			<a href="">
				<img src="https://pdp.edu.vn/wp-content/uploads/2021/06/hinh-anh-suy-tu-1.jpg" alt="">
				<h3>THANKS TO DESIGN</h3>
			</a>
		</div>
		<div class="img-container">
			<a href="">
				<img src="https://pdp.edu.vn/wp-content/uploads/2021/06/hinh-anh-suy-tu-1.jpg" alt="">
				<h3>CONTACT US</h3>
			</a>
		</div>
	</div>
	<div style="width:100%;height: 40px;">

	</div>
</div>
<style>
	.home{
		min-height: 1000px;
	}
	.vd video{
		width: 100%;
	}
	.item{
		padding-top: 30px;
		display: flex;
	}
	.img-container{
		border: 1px solid #CCC;
		height: auto;
		overflow: hidden; /** DÒNG BẮT BUỘC CÓ **/
		position: relative;
		width: 30%;
		margin: 0% 3%;
	}

	.img-container img {
		height: 100%;
		width: 100%;
		transition: all 1s;
	}

	.img-container:hover img {
		-webkit-transform: scale(1.3);
				transform: scale(1.3);
	}
	.img-container h3{
		width: 100%;
		position: absolute;
		padding: 20px 10px;
		bottom: 0px;
		background-color: gray;
		opacity: 0.6;
		color: white
	}
</style>