<?php
	$cart_css = "<link rel='stylesheet' href='Views/lib/css/cart.css'>";

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
  	<p class="w3-margin-0" ><span>Total: </span><span><?php echo $TongTienCart; ?></span></p>
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

	    <?php
	    	foreach ($ar_ItemCart as $key => $author) {
	     ?>
	     <tr>
	    	<td class="remove-products"><a " id="btnClose"><i class="fa fa-close w3-hover-red w3-text-red w3-large" aria-hidden="true"></i></a></td>
	    	<td width="100px"><img src=<?php echo $author['hinhanhsp']; ?> width="100px" height="100px" alt=""></td>
	      <td>
	      	<h4 class="product-name"><a href=""><?php echo $author['tensp']; ?></a></h4>
	      </td>
	      <td><input type="number" value=<?php echo $author['soluongsp']; ?> name="soluongsp" min="1" maxlength="2" pattern="[0-9]" value="1"  max="50"></td>
	      <td><?php echo $author['dongiasp']; ?></td>
	      <td><?php echo $author['tongtiensp']; ?></td>
	    </tr>
	     <?php 
	 		}
	      ?>
	    


	  </table>
	  <br>
	  <div class="col-lg-offset-10" >
	  	SĐT:
	  	<input style="width: 70%; margin-bottom: 20px ; " type="number" name="sdt" min="1" maxlength="2" pattern="[0-9]" value=""  max="150">
	  </div>

	  <div class="w3-right w3-right-align">
	  	<input href="" class="w3-round-xxlarge w3-btn w3-hover-red w3-uppercase w3-border-red w3-transition-all-short" onclick="UpdateClick('updateCart')" value="Update cart"> &nbsp;
	  	<input href="" class="w3-round-xxlarge w3-btn w3-hover-red w3-uppercase w3-border-red w3-transition-all-short" onclick="EmptyClick('emptyCart')" value="Empty cart"> &nbsp;
	  	<input href="" class="w3-round-xxlarge w3-btn w3-red w3-uppercase w3-border-red w3-hover-black w3-hover-border-black w3-transition-all-short w3-text-black" onclick="PayClick('payCart')" value="SUBMIT CART">
	  </div>
  </form>
  
</div>
<br>
<?php
	require 'parts/footer.php';
?>

<script>
	function PayClick(Route) {
		alert(Route);
		$.get("cart.php",{route:Route},function(data){
			location.reload();
		})
	}
	function UpdateClick(Route) {
		var va_route = Route;
		$.get("cart.php",{route:va_route},function(data){
			location.reload();
		})
	}
	function EmptyClick(Route) {
		 var va_route = Route;
		$.get("cart.php",{route:va_route},function(data){
			location.reload();
		})
	}
	$(".remove-products a i.fa-close").click(function() {
		$(this).parent().parent().parent().hide();
	});
</script>