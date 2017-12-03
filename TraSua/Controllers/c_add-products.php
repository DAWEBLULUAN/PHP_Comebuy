<?php 
/**
* 
*/
include("Models/m_SanPham.php");
class C_addsp
{
	// ma_sp	ten_sp	ma_loai_sp	hinh_anh	gia_ban	don_vi_ban	gioi_thieu
	public function themspidx()
		{
		 //	self::profile();
			echo "ấzxczxc";
		}

	public function loadCBB()
	{
		$msp = new M_SanPham();
		$dsloaisp= $msp->Doc_loai_san_pham();
		require("Views/admin/add-products.php");
	}
	public function TaoMaSP()
	{
		$m_sanpham = new M_SanPham();
		$dem_san_pham=$m_sanpham->Doc_mon_an_theo_loai_mon($maloai);
		$soluongsp=count($dem_san_pham)+1;
		$sp_id="SP";
		for ($i=0; $i < 6-strlen("SP".$soluongsp); $i++) { 
			$sp_id."0";
		}
		return $sp_id.$soluongsp;
	}
	public function ThemSP()
	{
		$optionSP= array();
		$optionSP[]= "12333" //TaoMaSP();//mã sp
		//echo  TaoMaSP();
		if (isset($_POST["product-name"])) 
			$optionSP[]= $_POST["product-name"];// tên sp
		if (isset($_POST["product-specification"]))  
			$optionSP[]= $_POST["product-specification"]; // mã loại sp
		// if (isset($_FILE["product-name"])) 
		// 	$optionSP[]= $_FILE["product-name"]; // ảnh để đó đã
			$optionSP[]="abc"; //để tạm link ảnh
		if (isset($_POST["product-price"])) 
			$optionSP[]= $_POST["product-price"]; // giá sp
		if (isset($_POST["product-intro"])) 
			$optionSP[]= $_POST["product-intro"]; // giới thiệu

		$msp = new M_SanPham();
		$kq = $msp->Them_moi_san_pham($optionSP);
		//require("Views/admin/add-products.php");
	}
}




 ?>