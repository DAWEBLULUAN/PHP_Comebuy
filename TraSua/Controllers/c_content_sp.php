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
		$indexTrang =  $_GET["indexT"];
		$options = array('LSP001',$indexTrang);

		//, $indexTrang
		//Model
		$m_sanpham = new M_SanPham();
		$san_pham=$m_sanpham->Doc_mon_an_theo_loai_mon_phan_trang($options);
		print_r($san_pham);

		//View 
		include("Views/v_content_sp.php");
	}
}


 ?>