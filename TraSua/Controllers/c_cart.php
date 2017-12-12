<?php 
/**
* 
*/
// session_start();
require("Models/m_SanPham.php");
require("Models/m_HoaDon.php");
class C_cart 
{
	
	public function LoadCart()
	{
		$m_sanpham = new M_SanPham();
		$ar_ItemCart = array();
		$TongTienCart =0;
		if (isset($_SESSION["s_cart"])) {
			$ar_ItemCart = $_SESSION["s_cart"];
			foreach ($ar_ItemCart as $key => $anthor) {
			$TongTienCart += $anthor['tongtiensp'];
		}
		}
		require ("Views/cart.php");
		
	}
	public function addItemToCart()
	{
		$flag = 1;
		if (isset($_SESSION["s_cart"])) {
			$ar_ItemCart = $_SESSION["s_cart"];// gan' session for array
			for ($i=0; $i <count($ar_ItemCart) ; $i++) { 
				if ($ar_ItemCart[$i]['masp']==$_GET["masp"]) {
					$ar_ItemCart[$i] =				 array('masp' => $_GET["masp"],
													'tensp' => $_GET["tensp"],
													'soluongsp' => $ar_ItemCart[$i]["soluongsp"]+1,
													'dongiasp' => $_GET["dongiasp"],
													'tongtiensp' => ($ar_ItemCart[$i]["soluongsp"]+1)*$_GET["dongiasp"],
													'hinhanhsp'=> $_GET["hinhanhsp"]
														 );
					$_SESSION["s_cart"]= $ar_ItemCart;	
					$flag=0;
				}
			}
			if ($flag) {
				$ar_ItemCart[] =				 array('masp' => $_GET["masp"],
													'tensp' => $_GET["tensp"],
													'soluongsp' => $_GET["soluongsp"],
													'dongiasp' => $_GET["dongiasp"],
													'tongtiensp' => $_GET["soluongsp"]*$_GET["dongiasp"],
													'hinhanhsp'=> $_GET["hinhanhsp"]
														 );
				$_SESSION["s_cart"]= $ar_ItemCart;
			}
			
		}
		else 
		{
			$ar_ItemCart= array();
			$ar_ItemCart[] =				 array('masp' => $_GET["masp"],
													'tensp' => $_GET["tensp"],
													'soluongsp' => $_GET["soluongsp"],
													'dongiasp' => $_GET["dongiasp"],
													'tongtiensp' => $_GET["soluongsp"]*$_GET["dongiasp"],
													'hinhanhsp'=> $_GET["hinhanhsp"]
														 );
			$_SESSION["s_cart"]= $ar_ItemCart;
		}
		
	}
	public function emptyCart()
	{
		if (isset($_SESSION["s_cart"])) {
			unset($_SESSION["s_cart"]);
		}
	}
	public function updateCart()
	{
		
	}
	public function TaoMaHD()
	{

		$m_hoadon = new M_HoaDon();
		$dem_hoa_don=$m_hoadon->Doc_hoa_don();
		$soluonghd=count($dem_hoa_don)+1;
		$hd_id="HD";
		for ($i=0; $i < 6-strlen("HD".$soluonghd); $i++) { 
			$hd_id."0";
		}
		return $hd_id.$soluonghd;
	}
	public function payCart()
	{
		echo "đã nhảy vào hàm payCart";
		if (isset($_SESSION["s_cart"])) {
			$ar_cart = $_SESSION["s_cart"];
			 ////ma_hoa_don	ngay_lap	nguoi_lap	sdt_khach_hang	tong_tien	don_vi_tien	trang_thai
		$optionHD= array();
		$optionHD[]= $this->TaoMaHD();//mã hd
		$optionHD[]=date("Y-m-d"); // ngày lập
		$optionHD[]="NV001";// người lập
		$optionHD[]="01634699175";  // sđt
		$TongTienCart = 0;
		foreach ($ar_cart as $key => $anthor) { $TongTienCart += $anthor['tongtiensp'];}
		$optionHD[]=$TongTienCart; // tổng tiền
		$optionHD[]="VNĐ"; // đơn vị
		$optionHD[]=1; // trạng thái

		$mhd = new M_HoaDon();
		$kq = $mhd->Them_moi_hoa_don($optionHD);
		if($kq)
		{
			echo "Thêm thành công";
			session_unset($_SESSION["s_cart"]);
		} 

			 }
		
	}




}

 ?>