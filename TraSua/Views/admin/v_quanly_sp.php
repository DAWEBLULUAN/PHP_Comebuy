
<head>
	<!-- Remove Envato Frame -->
	<!-- CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<!-- End CSS - LU -->
	<!-- <style> 
	input[type=text] {
    width: 130px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color: white;
    background-image: url('https://www.w3schools.com/howto/searchicon.png');
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
}

input[type=text]:focus {
    width: 100%;
}
</style> -->
</head>
<div id="mainContent" class="container">
	<div id="head_them_xoa_sua"></div>
</div>
<!-- <div style="margin-top: 20px;margin-left: 8%;" class="container">
<form>
  <input type="text" id="strTimKiem"   placeholder="Search..">
  
</form>
<button style="float: right;"  class="w3-button w3-white w3-border w3-border-blue"  onclick="TimKiem()">Tìm</button>
</div> -->

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
	function TimKiem() {
		var strTim = $("$strTimKiem").val();
		var route ="TimKiem";
		$.get("quanly_sp.php",{route:route,strTimKiem:strTim},function(data){
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

