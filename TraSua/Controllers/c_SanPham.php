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
	//	$m_sanpham = new M_SanPham();
	//	$san_pham=$m_sanpham->Doc_mon_an();
		//View 
	$maloai='LSP001';
		include("Views/menu.php");

	}

	public function homeToMenu()
	{
		$maloai=$_GET["maloai"];
		if(isset($_GET["indexT"]))
		{
			$indexTrang =$_GET["indexT"];
			$tranghientai=$indexTrang;
		}
		else 
		{
			$indexTrang= 1;
		}
		// $.get("phantrang_sp.php",{maloai:loaisp,indexT:indexTrangg},function(data){
  // 	  	$("#phan_trang").html(data);
			include("Views/menu.php");
	}
}


 ?>