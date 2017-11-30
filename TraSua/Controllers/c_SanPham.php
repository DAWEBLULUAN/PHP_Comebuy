<?php 
/**
* 
*/
include("Models/m_SanPham.php");

class C_sanpham
{

	public function Hien_thi_san_pham()
	{

		//Model
		$m_sanpham = new M_SanPham();
		$san_pham=$m_sanpham->Doc_mon_an();

		//View 
		include("Views/menu.php");
	}
}


 ?>