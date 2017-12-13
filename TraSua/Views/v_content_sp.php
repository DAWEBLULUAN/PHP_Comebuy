<head>
	<style type="text/css">
	/* The Modal (background) */
	.modal {
		display: none; /* Hidden by default */
		position: fixed; /* Stay in place */
		z-index: 1; /* Sit on top */
		left: 0;
		top: 0;
		width: 100%; /* Full width */
		height: 100%; /* Full height */
		overflow: auto; /* Enable scroll if needed */
		background-color: rgb(0,0,0); /* Fallback color */
		background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
	}

	/* Modal Content/Box */
	.modal-content {
		background-color: #fefefe;
		margin: 15% auto; /* 15% from the top and centered */
		padding: 20px;
		border: 1px solid #888;
		width: 80%; /* Could be more or less, depending on screen size */
	}

	/* The Close Button */
	.close {
		color: #aaa;
		float: right;
		font-size: 28px;
		font-weight: bold;
	}

	.close:hover,
	.close:focus {
		color: black;
		text-decoration: none;
		cursor: pointer;
	}
</style>
</head>

<!-- Trigger/Open The Modal -->


<!-- The Modal -->
<div id="myModal"  class="modal">

	<!-- Modal content -->
	<div class="modal-content container" >
		<span onclick="CloseModal()" class="close">&times;</span>
		<div >
			<center><img id="imagemodal" style="width: 150px; height: 150px;"  alt="coffe cup"></center>
		</div>
		<div style="padding-top: 55px;">
		<p><strong>Tên sản phẩm:</strong></p>
		<input class="w3-input"  id="iptensanphamm" type="text">
		<p><strong>Số lượng:</strong></p>
		<input class="w3-input" type="text" value="1" id="ipsoluongg">
		<div style="margin-top: 20px;">
			<button style="float: right;"  class="w3-button w3-white w3-border w3-border-blue"  onclick='Xacnhanthemsanpham()'>Thêm vào giỏ hàng</button>
		</div>
		
		</div>
		
	</div>

</div>

<!-- End Modal -->
<div id="kqAddtoCart" style="height: 2px; background-color: brown; width: 100%;"></div>
<div class="container" >
	<?php 
	foreach ($san_pham as $sp) {
		$linkAnh= $sp->hinh_anh;
		?>
		<div style="float: left;width: 23%;height: 100%; margin:1%;margin-top: 5%;">
			<center><img style="width: 100%; height: 250px;" src="<?=$linkAnh?>" alt="coffe cup"></center>
			<div><center><?php echo $sp->ten_sp."-".$sp->ma_sp ?></center></div>
			<div class="line"><center>. . . . . . . . . . . . . . . . . . .</center></div>
			<!-- Prices -->
			<div class="price"><center><?php echo $sp->gia_ban ?><sup>đ</sup>
<!--  -->
				<a class="myBtn" ><button  type="button" onclick='ThemSanPhamVaoGioHang(
					<?php echo json_encode($sp->ma_sp) ?>,
					<?php echo json_encode($sp->ten_sp) ?>,
					<?php echo json_encode('1') ?>,
					<?php echo json_encode($sp->gia_ban) ?>,
					<?php echo json_encode($sp->hinh_anh) ?>
					)' class="btn btn-warning " > + </button></a>
				</center>
				
			</div>
			<!-- End Prices -->
			<br>							
		</div>
		
		<?php 
	}
	?>
</div>
<script type="text/javascript">
	var smasp="abc";
	var stensp="abc";
	var ssoluongsp="abc";
	var sdongiasp="abc";
	var shinhanh="abc";
	function ThemSanPhamVaoGioHang(masp,tensp,soluongsp,dongiasp,hinhanh) {
		
				smasp=masp;
				stensp=tensp;
				ssoluongsp=soluongsp;
	 			sdongiasp=dongiasp;
				shinhanh=hinhanh;
				$("#iptensanphamm").val(tensp);
				document.getElementById("imagemodal").src=shinhanh;
				modal.style.display = "block";
	}

	function Xacnhanthemsanpham() {
		var va_route = "addItemToCart";
		ssoluongsp = $("#ipsoluongg").val();
		$.get("cart.php",{route:va_route,masp:smasp,tensp:stensp,soluongsp:ssoluongsp,dongiasp:sdongiasp,hinhanhsp:shinhanh},function(data){
			$("#kqAddtoCart").html(data);
		})
		modal.style.display = "none";

	}
	function CloseModal() {
		modal.style.display = "none";
	}
	function OpenModal() {
		modal.style.display= "block";
	}
// jvs modal
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal

//var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal 
btn.onclick = function() {
	modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
	modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
			if (event.target == modal) {
				modal.style.display = "none";
			}
		}

//$('#ipsoluong').text="1212";

</script>

