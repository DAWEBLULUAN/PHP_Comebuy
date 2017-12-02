<?php 
/**
* 
*/
include("Models/m_SanPham.php");

class C_sanpham_content
{

	public function Hien_thi_san_pham()
	{
		$maloai=$_GET["maloai"];
		$indexTrang = $_GET["indexT"];
		settype($indexTrang, "int");
		//Model
		$m_sanpham = new M_SanPham();
		$dem_san_pham=$m_sanpham->Doc_mon_an_theo_loai_mon($maloai);
		//View 
		include("Views/v_phantrang_sp.php");
	}
}


 ?>