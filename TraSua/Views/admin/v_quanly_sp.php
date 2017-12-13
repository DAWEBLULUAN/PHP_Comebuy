
<head>
	<!-- Remove Envato Frame -->
	<!-- CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<!-- End CSS - LU -->
	<!-- css modal -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<!-- end css modal -->
	<style> 
	.city {display:none}
</style>
</head>
<div id="mainContent" class="container">
	<div id="head_them_xoa_sua"></div>

<div class="container"  style="border: 1px solid; padding-top: 10px;">
	<div class="col-lg-3">
	<p>Tìm:</p>
	</div>
	<div class="col-lg-6">
	<input class="w3-input" id="strTimKiem" type="text"></p>
	</div>
	<div class="col-lg-3"><button style="float: right;"  class="w3-button w3-white w3-border w3-border-blue"  onclick="Search()">Xác nhận</button></div>
</div>

<!--  -->
<div class="w3-container">


<div id="id01" class="w3-modal">
 <div class="w3-modal-content w3-card-4 w3-animate-zoom">
  <header style="text-align: center;" class="w3-container w3-blue"> 
   <span onclick="document.getElementById('id01').style.display='none'" 
   class="w3-button w3-blue w3-xlarge w3-display-topright">&times;</span>
   <h2>Chỉnh sửa sản phẩm</h2>
  </header>
  <div style="margin: 10px;">
  	 
   <center><h3>-------</h3></center>
<form action="quanly_sp.php?route=confirmEdit" method="post" enctype="multipart/form-data">
	<div class="form-group col-lg-6">
    <label for="product-image">Chọn hình ảnh:</label>
    <input type="file" name="product-image" value="" class="form-control" id="product-image">
  </div>
  <div class="form-group col-lg-6">
    <label for="product-name">Tên sản phẩm:</label>
    <input type="text" class="form-control" id="product-name" value="" maxlength="100" placeholder="Enter product's name" name="product-name">
  </div>
  <div class="form-group col-lg-6 ">
    <label for="product-specification">Loại sản phẩm:</label>
    <select name="product-specification" id="product-specification" class="form-control">
      <?php 
        foreach ($dsloaisp as $item) {
       ?>
    	<option value=<?=$item->ma_loai_sp?>><?=$item->ten_loai_sp?></option>
      <?php
       }
       ?>
    </select>
  </div>
  <div class="form-group col-lg-6">
    <label for="product-price">Giá:</label>
    <input type="number" class="form-control" id="product-price" value="" placeholder="Enter price" name="product-price">
  </div>
  <div class="form-group col-lg-12">
    <label for="product-intro">Giới thiệu:</label>
    <textarea name="product-intro" class="form-control" id="product-intro" maxlength="200" placeholder="Write something about product" rows="5"></textarea>
  </div>
  <p>-</p>
</form>
  </div>
  <div class="w3-container w3-light-grey w3-padding">
  	<button style="float: right;"  class="w3-button w3-white w3-border w3-border-blue"  onclick="XacNhanEdit()">Xác nhận</button>
  </div>
 </div>
</div>

</div>


<!--  -->
<div class="container" >
	<a onclick="clickAddnew()">
	<div style="float: left;width: 23%;height: 35%; margin:1%;margin-top: 5%; border-radius: 3px;">
		<center><img style="width: 250px; height: 250px; border: 1px solid;" src="Views/img/addnewsp.png" alt="THÊM SP"></center>
		
		<!-- Prices -->
		<div class="price"><center>
		</center>
	</div>
	<!-- End Prices -->
	<br>							
</div>
</a>
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
			<button type="button" onclick='clickedit(<?php echo json_encode($nut)?>,
													<?php echo json_encode($sp->ma_sp)?>,
													<?php echo json_encode($sp->ten_sp)?>,
													<?php echo json_encode($sp->gia_ban)?>,
													<?php echo json_encode($sp->hinh_anh)?>,
													<?php echo json_encode($sp->gioi_thieu)?>
													)' class="btn btn-warning"> Edit </button>
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
</div>
<script>
	function Search(){
		var TuKhoa = $("#strTimKiem").val();
		var route ="search";
		$.get("quanly_sp.php",{route:route,strTimKiem:TuKhoa},function(data){
			$("#mainContent").html(data);
		})
	}

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
	var Vtask ="z";
	var Vmasp="z";
	var Vtensp="z";
	var Vgiasp="z";
	var Vhinhanh="z";
	var Vgioithieu="z";

	function clickedit(cVtask,cVmasp,cVtensp,cVgiasp,cVhinhanh,cVgioithieu) {
		Vtask = cVtask;
	Vmasp = cVmasp;
	Vtensp = cVtensp;
	Vgiasp = cVgiasp;
	Vhinhanh = cVhinhanh;
	Vgioithieu =cVgioithieu;
	document.getElementById('id01').style.display='block';
	$("#product-name").val(cVtensp);
	$("#product-price").val(cVgiasp);
	$("#product-intro").val(cVgioithieu);
	$("#product-image").val(cVhinhanh);
	
	}

	function XacNhanEdit() {
		var loaisp = $("#product-specification").val();
			Vtensp = $("#product-name").val();
			Vgiasp = $("#product-price").val();
			Vgioithieu = $("#product-intro").val();
			//Vhinhanh = $("#product-image").val();


		
		$.get("quanly_sp.php",{route:Vtask,masp:Vmasp,maloaisp:loaisp,tensp:Vtensp,giasp:Vgiasp,hinhanh:Vhinhanh,gioithieu:Vgioithieu},function(data){
			 $("#head_them_xoa_sua").html(data);
		})
		alert(Vtask+" - "+Vmasp+" - "+Vtensp+" - "+Vgiasp+" - "+Vhinhanh+" - "+Vgioithieu+" - "+loaisp);
		document.getElementById('id01').style.display='none';
	}






</script>

