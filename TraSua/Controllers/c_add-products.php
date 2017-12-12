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
		 	self::loadCBB();
		
	}

	public function loadCBB()
	{
		$msp = new M_SanPham();
		$dsloaisp= $msp->Doc_loai_san_pham();
		require("Views/admin/add-products.php");
		//


	//	$maloai=$_GET["maloai"];
	//	$indexTrang =  $_GET["indexT"];
	//	if($indexTrang!=1)
	//	{
	//		$indexTrang*=8;
	//	}
	//	$options = array($maloai,$indexTrang);

		//, $indexTrang
		//Model

	}
	public function TaoMaSP()
	{
		$m_sanpham = new M_SanPham();
		$dem_san_pham=$m_sanpham->Doc_so_luong_mon_an();
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
		$optionSP[]= $this->TaoMaSP();//mã sp
		//echo  TaoMaSP();
		if (isset($_POST["product-name"])) 
			$optionSP[]= $_POST["product-name"];// tên sp
		if (isset($_POST["product-specification"]))  
			$optionSP[]= $_POST["product-specification"]; // mã loại sp
		 if (isset($_FILES["product-image"])) 
		 {
		 	$linkImg = "Views/img/sanpham/".$_FILES["product-image"]["name"];
		 	move_uploaded_file($_FILES["product-image"]["tmp_name"], "$linkImg");
		 	//$optionSP[]= $_FILE["product-image"]; // ảnh để đó đã
			$optionSP[]=$linkImg;
		 }
		 else 
		 {
		 	$optionSP[]="khong lay duoc duong dan anh";
		 }
		 	
		if (isset($_POST["product-price"])) 
			$optionSP[]= $_POST["product-price"]; // giá sp
		if (isset($_POST["product-intro"])) 
			$optionSP[]= $_POST["product-intro"]; // giới thiệu

		$msp = new M_SanPham();
		$kq = $msp->Them_moi_san_pham($optionSP);
		if($kq)
		{
			echo "Thêm thành công";
			header("Location: quanly_sp.php");
		} 
		//require("Views/admin/add-products.php");
	}
}




 ?>