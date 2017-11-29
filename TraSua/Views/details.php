<?php
	$details_css = "<link rel='stylesheet'href='lib/css/details.css'>";
	require 'parts/header.php';
	require 'parts/fixed-sidebar.php';
 ?>
 <header class="header">
	
	<style>
		
	</style>

	<div class="container">
		<!-- Menu here -->

		<?php include_once 'parts/body.navbar.php'; ?>
		<!-- End menu -->
	</div>
</header>
<div class="">
	<div class="w3-row w3-container">
		<div class="w3-content">
			<div class="w3-col s12 m5">
				<img class="w3-hover-scale-with-transition w3-transition-all-half-second" src="img/tea/5.png" width="100%" height="600px" alt="">
			</div>
			<div class="w3-col s12 m7">
				<form action="">
					<div class="w3-container">
						<h1 class="dtl-name w3-xxlarge" style="margin-bottom: 0px;">Trà Hải thần</h1>
						<p class="dtl-price w3-xlarge" style="margin-top: 0px">51000đ</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis nam, libero laboriosam veniam aperiam autem ut quae veritatis reprehenderit, numquam ex saepe, officiis vero. Tempore consequuntur fugit minus animi ipsam voluptatem aut facere, et harum dolorum sapiente voluptatum commodi aliquid necessitatibus quaerat quasi laborum incidunt voluptate, modi earum veniam repudiandae sit, quis ea. Praesentium laborum est illum earum veritatis rerum et, modi ipsam culpa atque velit provident, quis optio sunt enim omnis sed autem consectetur vitae eaque, natus nemo debitis sequi a. Accusamus sit velit facilis ducimus nam, minima dolor qui necessitatibus, nesciunt laboriosam et praesentium a mollitia quos similique!</p>

						<!-- <div class="topping-list">
							<p style="margin-bottom: 0px">Toppings</p>
							<span href=""><i class="w3-text-grey">*Chọn tối đa 2 loại</i></span><br>
							<label class="w3-col s6 m6 l4"><input class="checkbox-item" type="checkbox" name="topping"><span class="topping-name">Trân châu</span></label>
							<label class="w3-col s6 m6 l4"><input class="checkbox-item" type="checkbox" name="topping"><span class="topping-name">Kem sữa</span></label>
							<label class="w3-col s6 m6 l4"><input class="checkbox-item" type="checkbox" name="topping"><span class="topping-name">Thạch khoai môn</span></label>
							<label class="w3-col s6 m6 l4"><input class="checkbox-item" type="checkbox" name="topping"><span class="topping-name">Thạch vải</span></label>
							<label class="w3-col s6 m6 l4"><input class="checkbox-item" type="checkbox" name="topping"><span class="topping-name">Thạch pha lê</span></label>
							<label class="w3-col s6 m6 l4"><input class="checkbox-item" type="checkbox" name="topping"><span class="topping-name">Thạch dừa</span></label>
							<label class="w3-col s6 m6 l4"><input class="checkbox-item" type="checkbox" name="topping"><span class="topping-name">Thạch nha đam</span></label>
							<label class="w3-col s6 m6 l4"><input class="checkbox-item" type="checkbox" name="topping"><span class="topping-name">Sương sáo</span></label>
							<label class="w3-col s6 m6 l4"><input class="checkbox-item" type="checkbox" name="topping"><span class="topping-name">Sữa tươi</span></label>
							<label class="w3-col s6 m6 l4"><input class="checkbox-item" type="checkbox" name="topping"><span class="topping-name">Song Q</span></label>
						</div> -->
					</div>
					
					<div class="w3-container">
						<p style="margin-bottom: 0px;">Choose size</p>
						<select name="" id="select-size" onclick="changeBorderRadius()" style="outline: none; border-radius: 20px; border: 1px solid #aaa; padding: 10px; width: 100px;">
							<option value="">350ml</option>
							<option value="">500ml</option>
							<option value="">750ml</option>
						</select>
					</div>
					<br>
					<div class="w3-container">
						<input style="outline: none; border-radius: 20px; border: 1px solid #aaa; padding: 10px; text-align: center; width: 100px;" pattern="[0-9]" type="number" min="0" maxlength="2" value="1" max="50">
					</div>
					<br>
					<div class="w3-container">
						<input type="submit" value="Add to cart" class="w3-round-xxlarge w3-btn w3-hover-red w3-uppercase w3-border-red w3-transition-all-short" style="border: 2px solid red; text-decoration: none">
					</div>
				</form>

			</div>
		</div>
	</div>
	<br><br>

	<!-- Related Products -->
	<div class="w3-row w3-container">
		<h1 class="w3-center">Related products</h1>
		<div class="products w3-content" style="overflow: hidden; box-sizing: border-box; padding: 0px 39px">

			<div class="one-product w3-col s12 m4">
				<div class="product-image" style="width: 100%; height: 270px;">
					<a href="details.php"><img src="img/tea/5.png" width="100%" height="100%" alt="" class="w3-hover-scale-with-transition w3-transition-all-half-second"></a>
				</div>
				<div class="product-info" style="text-align: center;">
					<br>
					<span class="product-name">Trà hải thần</span><br>
					<span class="product-price">51000đ</span>
				</div>
			</div>
			<div class="one-product w3-col s12 m4">
				<div class="product-image" style="width: 100%; height: 270px;">
					<a href="details.php"><img src="img/tea/5.png" width="100%" height="100%" alt=""></a>
				</div>
				<div class="product-info" style="text-align: center;">
					<br>
					<span class="product-name">Trà hải thần</span><br>
					<span class="product-price">51000đ</span>
				</div>
			</div>
			<div class="one-product w3-col s12 m4">
				<div class="product-image" style="width: 100%; height: 270px;">
					<a href="details.php"><img src="img/tea/5.png" width="100%" height="100%" alt=""></a>
				</div>
				<div class="product-info" style="text-align: center;">
					<br>
					<span class="product-name">Trà hải thần</span><br>
					<span class="product-price">51000đ</span>
				</div>
			</div>

		</div>

	</div>
	<!-- End Related Products -->


	

</div>
<?php include_once 'parts/footer.php'; ?>

<script>
	
	// Change borderradius when click the select tag
	function changeBorderRadius() {
		var x = document.getElementById("select-size");
		if(x.style.borderRadius === "20px") {
			x.style.borderRadius = "20px 20px 0px 0px";
		}
		else {
			x.style.borderRadius = "20px 20px 20px 20px";
		}
	}
	
	// Limit checkbox selection ( only 2 Toppings)
	$('.checkbox-item').on('change', function() {
	  if($('.checkbox-item:checked').length > 2) {
	       this.checked = false;
	  }
	});
</script>
