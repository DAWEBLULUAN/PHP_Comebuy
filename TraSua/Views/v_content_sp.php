
ZXCZXCZXC
<div class="container" >
<?php 
foreach ($san_pham as $sp) {
	# code...
 ?>
						<div style="float: left;width: 23%;margin:1%;margin-top: 5%;">
									<center><img src="Views/img/freddie-marriage-168317.png" alt="coffe cup"></center>
										<div><center><?php echo $sp->ten_sp ?></center></div>
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

 