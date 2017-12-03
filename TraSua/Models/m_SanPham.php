<?php 

require_once("Model.php");

/**
* 
*/
class M_SanPham extends Model
{
	
	public function Doc_mon_an()
	{
		$sql="select * from san_pham";
		$this->setQuery($sql);
		return $this->loadAllRows();	
	}

	public function Doc_mon_an_theo_ma_mon($mamon)
	{
		$sql="select * from san_pham where ma_sp = ?";
		$this->setQuery($sql);
		$param = array($mamon);
		return $this->loadRow($param);
	}
	public function Doc_mon_an_theo_loai_mon($maloai)
	{
		$sql="select * from san_pham where ma_loai_sp = ?";
		$this->setQuery($sql);
		$param = array($maloai);
		return $this->loadAllRows($param);
	}
	public function Doc_loai_san_pham()
	{
		$sql="select * from loai_san_pham";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
	public function Doc_mon_an_theo_loai_mon_phan_trang($options)
	{
		$sql = "SELECT * FROM san_pham where ma_loai_sp = '$options[0]' LIMIT $options[1] , 8 ";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
}
 ?>