
<head>
	<!-- Remove Envato Frame -->
	<!-- CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<!-- End CSS - LU -->
</head>
<div class="container">
	<div id="head_them_xoa_sua"></div>
</div>

<div class="container" >
	<div style="float: left;width: 23%;height: 40%; margin:1%;margin-top: 5%;">
		<center><img style="width: 250px; height: 250px;" src="" alt="THÊM SP"></center>
		<div><center>Thêm SP</center></div>
		<div class="line"><center>. . . . . . . . . . . . . . . . . . .</center></div>
		<!-- Prices -->
		<div class="price"><center>
			<button type="button" onclick="clickAddnew()" class="btn btn-warning"> Thêm sản phẩm </button>
		</center>
	</div>
	<!-- End Prices -->
	<br>							
</div>
<?php 
foreach ($san_pham as $sp) {
	$linkAnh= $sp->hinh_anh;
	$nut = "edit";
	$xoa="delete";
	?>
	<div style="float: left;width: 23%;height: 40%; margin:1%;margin-top: 5%;">
		<center><img style="width: 100%; height: 250px;" src="<?=$linkAnh?>" alt="coffe cup"></center>
		<div><center><?php echo $sp->ten_sp."-".$sp->ma_sp ?></center></div>
		<div class="line"><center>. . . . . . . . . . . . . . . . . . .</center></div>
		<!-- Prices -->
		<div class="price"><center><?php echo $sp->gia_ban ?><sup>đ</sup>
			<button type="button" onclick='clickedit(<?php echo json_encode($nut)?>,<?php echo json_encode($sp->ma_sp)?>)' class="btn btn-warning"> Edit </button>
			<button type="button" onclick='clickDelete(<?php echo json_encode($xoa)?>,<?php echo json_encode($sp->ma_sp)?>)'  class="btn btn-warning"> Delete </button>
		</center>
	</div>
	<!-- End Prices -->
	<br>							
</div>

<?php 
}
?>
</div>

<script>
	function clickAddnew()
	{
		$.get("Themsanpham.php",{},function(data){
			$("#head_them_xoa_sua").html(data);
		})
	}
	function clickDelete(Vtask,Vmasp) {
		alert(Vtask);
		var task = Vtask;
		var strMasp =Vmasp;
		$.get("quanly_sp.php",{route:task,masp:strMasp},function(data){
			$("#head_them_xoa_sua").html(data);
		})
	}
	function clickedit(Vtask,Vmasp) {
// đoạn dưới là ajax xài jquery
alert(Vtask);
var task = Vtask;
var strMasp =Vmasp;
$.get("quanly_sp.php",{route:task,masp:strMasp},function(data){
	$("#head_them_xoa_sua").html(data);
})
}
</script>

