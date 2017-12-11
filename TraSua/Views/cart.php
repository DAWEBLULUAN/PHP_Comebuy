<?php
	$cart_css = "<link rel='stylesheet' href='Views/lib/css/cart.css'>";

	require 'parts/header.php';
?>
<!-- -->
<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
.city {display:none}
</style>
<body>

<div class="w3-container">


<div id="id01" class="w3-modal">
 <div class="w3-modal-content w3-card-4 w3-animate-zoom">
  <header style="text-align: center;" class="w3-container w3-blue"> 
   <span onclick="document.getElementById('id01').style.display='none'" 
   class="w3-button w3-blue w3-xlarge w3-display-topright">&times;</span>
   <h2>Thông tin khách hàng</h2>
  </header>
  <div style="margin: 10px;">
  	 
   <h4 style="float: left;">Số điện thoại liên hệ:</h4>
    <input class="w3-input" id="txtSDT" type="text"></p>
  
  </div>
 
  <div class="w3-container w3-light-grey w3-padding">
  	<button style="float: right;"  class="w3-button w3-white w3-border w3-border-blue"  onclick="document.getElementById('id01').style.display='none';PayClick('payCart')">Xác nhận</button>
  </div>
 </div>
</div>

</div>

</body>
</html> 

<!--  -->

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
	  

	  <div class="w3-right w3-right-align">
	  	<input href="" class="w3-round-xxlarge w3-btn w3-hover-red w3-uppercase w3-border-red w3-transition-all-short" onclick="UpdateClick('updateCart')" value="Update cart"> &nbsp;
	  	<input href="" class="w3-round-xxlarge w3-btn w3-hover-red w3-uppercase w3-border-red w3-transition-all-short" onclick="EmptyClick('emptyCart')" value="Empty cart"> &nbsp;
	  	<input href="" class="w3-round-xxlarge w3-btn w3-red w3-uppercase w3-border-red w3-hover-black w3-hover-border-black w3-transition-all-short w3-text-black" onclick="document.getElementById('id01').style.display='block'" value="SUBMIT CART">
	  </div>
  </form>
  <!-- ; -->
</div>
<br>
<?php
	require 'parts/footer.php';
?>

<script>
	function PayClick(Route) {
		alert(Route);
		var sdt = $("#txtSDT").val();
		$.get("cart.php",{route:Route,sdt:sdt},function(data){
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
// 
document.getElementsByClassName("tablink")[0].click();

function openCity(evt, cityName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
    tablinks[i].classList.remove("w3-light-grey");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.classList.add("w3-light-grey");
}

</script>