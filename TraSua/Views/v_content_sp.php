
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
									<button type="button" class="btn btn-warning"> + </button>
									</center>
									</div>
									<!-- End Prices -->
									<br>							
						</div>
						
<?php 
}
 ?>
  </div>

 