<?php 
/**
* 
*/
include("Models/m_SanPham.php");
class C_qlsp
{
	// ma_sp	ten_sp	ma_loai_sp	hinh_anh	gia_ban	don_vi_ban	gioi_thieu

	public  function edit()
	{
		$arUPSP = array();
			
			if(isset($_GET["tensp"]))
				$arUPSP[]=$_GET["tensp"];
			if(isset($_GET["maloaisp"]))
				$arUPSP[]=$_GET["maloaisp"];
			if(isset($_GET["hinhanh"]))
				$arUPSP[]=$_GET["hinhanh"];
			if(isset($_GET["giasp"]))
				$arUPSP[]=$_GET["giasp"];
			if(isset($_GET["gioithieu"]))
				$arUPSP[]=$_GET["gioithieu"];
			if(isset($_GET["masp"]))
				$arUPSP[]=$_GET["masp"];
		$Msp = new M_SanPham();
		$ketqua = $Msp->Up_san_pham($arUPSP);
		if ($ketqua) {
			self::load_tat_ca_sp();
					}
					else 
					{
							echo  "up thất bại";
					}			

			
	}
	public function confirmEdit()
	{
	    ///
	    echo "Chỉnh sửa thành công";
	    self::load_tat_ca_sp();
	}
	public function delete()
	{
		
	if (isset($_GET["masp"])) {
		$masp= $_GET["masp"];
		

		$Dsp = new M_SanPham();
		$ketqua = $Dsp->Xoa_san_pham($masp);
		if ($ketqua) {
			echo "Xóa thành công";
			self::load_tat_ca_sp();
		}
	}
	}

	public function search()
	{
		self::load_tat_ca_sp();
	}

	public function load_tat_ca_sp()
	{
		
		if (isset($_GET["strTimKiem"])) {
			$tukhoa = $_GET["strTimKiem"];
			$msp = new M_SanPham();
			$san_pham= $msp->Doc_mon_an_theo_tim_kiem($tukhoa);
			$dsloaisp= $msp->Doc_loai_san_pham();
			require("Views/admin/v_quanly_sp.php");
			
		}
		else 
		{
			
			$msp = new M_SanPham();
			$san_pham= $msp->Doc_mon_an();
			$dsloaisp= $msp->Doc_loai_san_pham();
			require("Views/admin/v_quanly_sp.php");

		}
		
		
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
			self::loadCBB();
		} 
		//require("Views/admin/add-products.php");
	}
	public function TimKiem()
	{
		// $msp = new M_SanPham();
		// $san_pham= $msp->Doc_mon_an();
		// require("Views/admin/v_quanly_sp.php");
		
	}
}




 ?>