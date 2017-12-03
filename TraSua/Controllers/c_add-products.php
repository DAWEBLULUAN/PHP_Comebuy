<?php 
/**
* 
*/
include("Models/m_SanPham.php");
class C_addsp
{
	// ma_sp	ten_sp	ma_loai_sp	hinh_anh	gia_ban	don_vi_ban	gioi_thieu

	public function loadCBB()
	{
		if (isset($_GET[""])) {
			# code...
		}
		$msp = new M_SanPham();
		$dsloaisp= $msp->Doc_loai_san_pham();
		require("Views/admin/add-products.php");
	}
}




 ?>