
<div id="content_sp_phan_trang">
	
</div>


<div style="text-align: center;" >
						<?php 
							$sotrang = count($dem_san_pham)%8+1;
						for ($i=1; $i <= $sotrang; $i++) { 
						?>
							<button  type="button" id="<?=$i?>" class="btn btn-success" onclick='btnPhanTrangCLick(<?php echo json_encode($maloai)?>,<?=$i?>)'><?= $i?></button>
						<?php 
						} 
						?>
 </div>
<script >
	 document.getElementById("1").click(); 
	function btnPhanTrangCLick(loaisp,indextrang) {
		 var loaisp = loaisp;
  	 	 var indexTrang =indextrang;
  	  $.get("content_sp.php",{maloai:loaisp,indexT:indexTrang},function(data){
  	  	$("#content_sp_phan_trang").html(data);
 	   })
	}
</script>