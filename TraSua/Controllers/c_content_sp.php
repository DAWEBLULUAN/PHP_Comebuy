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
		if($indexTrang!=1)
		{
			$indexTrang*=8;
		}
		$options = array($maloai,$indexTrang);

		//, $indexTrang
		//Model
		$m_sanpham = new M_SanPham();
		$san_pham=$m_sanpham->Doc_mon_an_theo_loai_mon_phan_trang($options);

		//View 
		include("Views/v_content_sp.php");
	}
}


 ?>