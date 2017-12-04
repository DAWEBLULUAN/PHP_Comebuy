
<div id="content_sp_phan_trang">
	
</div>


<div style="text-align: center;" >
	<button  type="button" class="btn btn-success" onclick='btnBack(<?php echo json_encode($maloai)?>,<?=$tranghientai?>)'>Back</button>

						<?php 
							$sotrang = count($dem_san_pham)%8+1;
						for ($i=1; $i <= $sotrang; $i++) { 
						?>
							<button  type="button" id="<?=$i?>" class="btn btn-success" onclick='btnPhanTrangCLick(<?php echo json_encode($maloai)?>,<?=$i?>)'><?= $i?></button>
						<?php 
						} 
						?>
	<button  type="button" class="btn btn-success" onclick='btnNext(<?php echo json_encode($maloai)?>,<?=$tranghientai?>,<?=$sotrang?>)'>Next</button>



 </div>
<script >
	 document.getElementById("1").click(); // mặc định khi vào menu sẽ là trang 1

	 function btnBack(loaisp,indextrang) {
		 var loaisp = loaisp;
		 if (indextrang>1) {
		 	 indexTrang =indextrang-1;
		 }
		 else
		 {
		 	 indexTrang = indextrang;
		 }
  	 	
  	  $.get("content_sp.php",{maloai:loaisp,indexT:indexTrang},function(data){
  	  	$("#content_sp_phan_trang").html(data);
 	   })
	}

	function btnNext(loaisp,indextrang,sotrang) {
		 var loaisp = loaisp;
		  if (indextrang<sotrang) {
		 	  indexTrang =indextrang +1;
		 }
		 else
		 {
		 	 indexTrang =indextrang;
		 } 
		 
  	  $.get("content_sp.php",{maloai:loaisp,indexT:indexTrang},function(data){
  	  	$("#content_sp_phan_trang").html(data);
 	   })
	}





	function btnPhanTrangCLick(loaisp,indextrang) {
		
		 var loaisp = loaisp;
  	 	 var indexTrang =indextrang;
  	  $.get("content_sp.php",{maloai:loaisp,indexT:indexTrang},function(data){
  	  	$("#content_sp_phan_trang").html(data);
 	   })
	}
</script>