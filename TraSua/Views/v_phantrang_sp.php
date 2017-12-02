
<div id="content_sp_phan_trang">
	
</div>


<div style="text-align: center;" >
						<?php 
							
						for ($i=1; $i <= count($dem_san_pham); $i++) { 
						?>
							<button  type="button" class="btn btn-success" onclick='btnPhanTrangCLick(<?php echo json_encode($maloai)?>,<?=$i?>)'><?= $i?></button>
						<?php 
						} 
						?>
 </div>
<script >
	function btnPhanTrangCLick(loaisp,indextrang) {
		 var loaisp = loaisp;
  	 	 var indexTrang =indextrang;
  	  $.get("content_sp.php",{maloai:loaisp,indexT:indexTrang},function(data){
  	  	$("#content_sp_phan_trang").html(data);
 	   })
	}
</script>