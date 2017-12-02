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
		$param = array($maLoai);
		return $this->loadAllRows();
	}
}
 ?>