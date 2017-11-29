<?php
	$cart_css = "<link rel='stylesheet' href='lib/css/cart.css'>";

	require 'parts/header.php';
?>
<!-- <style>
	table, th, td {
	    /*border: 1px solid black;*/

	}
	input[type=number]::-webkit-inner-spin-button,
	input[type=number]::-webkit-outer-spin-button {
		-webkit-appearance: none;
	}
	.fa-close {
		padding: 5px 7px;
		border-radius: 50%;
	}

</style> -->

<div class="header">
	<div class="container">
	<link rel="stylesheet" href="style.css">
		<!-- Menu here -->
		<?php include_once 'parts/body.navbar.php'; ?>
		<!-- End menu -->
	</div>
</div>

<div class="w3-container">
	<p class="w3-center w3-xxlarge">Your cart</p>
	<br>
	
	<br>
  <div class="w3-right w3-right-align">
  	<p class="w3-margin-0" ><span>Total: </span><span>300000vnđ</span></p>
  	<a href="">Đăng nhập để được giảm giá</a>
  </div>
  <br>
  
	<form action="" method="GET">
		<table class="w3-table-all">
	    <thead>
	      <tr class="w3-light-grey">
	      	<th></th>
	        <th colspan="2">Products</th>
	        <th id="quatity">Quatity</th>
	        <th id="unit-price">Unit price</th>
	        <th id="amount">Amount</th>
	      </tr>
	    </thead>
	    <tr>
	    	<td class="remove-products"><a href=""><i class="fa fa-close w3-hover-red w3-text-red w3-large" aria-hidden="true"></i></a></td>
	    	<td width="100px"><img src="img/cart-model/hai-than-min-180x180.png" width="100px" height="100px" alt=""></td>
	      <td>
	      	<h4 class="product-name"><a href="">Trà sữa hải thần </a></h4>
	      	<span>Size: </span><span>350ml</span> <br>
	      </td>
	      <td><input type="number" min="1" maxlength="2" pattern="[0-9]" value="1"  max="50"></td>
	      <td>32000đ</td>
	      <td>64000đ</td>
	    </tr>

	    <tr>
	    	<td class="remove-products"><a href=""><i class="fa fa-close w3-hover-red w3-text-red w3-large" aria-hidden="true"></i></a></td>
	    	<td width="100px"><img src="img/cart-model/hai-than-min-180x180.png" width="100px" height="100px" alt=""></td>
	      <td>
	      	<h4 class="product-name"><a href="">Trà sữa hải thần </a></h4>
	      	<span>Size: </span><span>350ml</span> <br>
	      </td>
	      <td><input type="number" min="1" maxlength="2" pattern="[0-9]" value="1"  max="50"></td>
	      <td>32000đ</td>
	      <td>64000đ</td>
	    </tr>

	    <tr>
	    	<td class="remove-products"><a href=""><i class="fa fa-close w3-hover-red w3-text-red w3-large" aria-hidden="true"></i></a></td>
	    	<td width="100px"><img src="img/cart-model/hai-than-min-180x180.png" width="100px" height="100px" alt=""></td>
	      <td>
	      	<h4 class="product-name"><a href="">Trà sữa hải thần </a></h4>
	      	<span>Size: </span><span>350ml</span> <br>
	      </td>
	      <td><input type="number" min="1" maxlength="2" pattern="[0-9]" value="1"  max="50"></td>
	      <td>32000đ</td>
	      <td>64000đ</td>
	    </tr>
	  </table>
	  <br>
	  <div class="w3-right w3-right-align">
	  	<input href="" class="w3-round-xxlarge w3-btn w3-hover-red w3-uppercase w3-border-red w3-transition-all-short" value="Update cart"> &nbsp;
	  	<input href="" class="w3-round-xxlarge w3-btn w3-hover-red w3-uppercase w3-border-red w3-transition-all-short" value="Empty cart"> &nbsp;
	  	<input type="submit" class="w3-round-xxlarge w3-btn w3-red w3-uppercase w3-border-red w3-hover-black w3-hover-border-black w3-transition-all-short w3-text-black" value="Pay">
	  </div>
  </form>
  
</div>
<br>
<?php
	require 'parts/footer.php';
?>