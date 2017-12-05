<div id="kqAddtoCart" style="height: 5px; background-color: red; width: 100%;"></div>
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

	<button type="button" onclick='ThemSanPhamVaoGioHang(<?php echo json_encode($sp->ma_sp) ?>,
														<?php echo json_encode($sp->ten_sp) ?>,
														<?php echo json_encode('1') ?>,
														<?php echo json_encode($sp->gia_ban) ?>,
														<?php echo json_encode($sp->hinh_anh) ?>
													)' class="btn btn-warning"> + </button>
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
  	function ThemSanPhamVaoGioHang(masp,tensp,soluongsp,dongiasp,hinhanh) {
  		alert(masp);
  		var va_route = "addItemToCart";
  		$.get("cart.php",{route:va_route,masp:masp,tensp:tensp,soluongsp:soluongsp,dongiasp:dongiasp,hinhanhsp:hinhanh},function(data){
  			$("#kqAddtoCart").html(data);
  		})
  	}



  </script>

 