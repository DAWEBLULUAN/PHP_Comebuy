<?php 
/**
* 
*/
include("Models/m_SanPham.php");
$tranghientai=0;
class C_sanpham_content
{
		
	public function Hien_thi_san_pham()
	{
		$maloai=$_GET["maloai"];
		if(isset($_GET["indexT"]))
		{
			$indexTrang =$_GET["indexT"];
			$tranghientai=$indexTrang;
		}
		
		settype($indexTrang, "int");
		//Model
		$m_sanpham = new M_SanPham();
		$dem_san_pham=$m_sanpham->Doc_mon_an_theo_loai_mon($maloai);
		//View 
		include("Views/v_phantrang_sp.php");
	}
}


 ?>