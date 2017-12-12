<?php 

require_once("Model.php");

/**
* 
*/
class M_SanPham extends Model
{
	
	public function Doc_mon_an()
	{
		$sql="select * from san_pham where trang_thai = '1'";
		$this->setQuery($sql);
		return $this->loadAllRows();	
	}
	public function Doc_so_luong_mon_an()
	{
		$sql="select * from san_pham";
		$this->setQuery($sql);
		return $this->loadAllRows();	
	}
	public function Doc_mon_an_theo_tim_kiem($tukhoa)
	{
		$sql="select * from san_pham where trang_thai = '1' and ten_sp LIKE N'%$tukhoa%'";
		$this->setQuery($sql);
		return $this->loadAllRows();	
	}

	public function Doc_mon_an_theo_ma_mon($mamon)
	{
		$sql="select * from san_pham where ma_sp = ? and trang_thai = '1' ";
		$this->setQuery($sql);
		$param = array($mamon);
		return $this->loadRow($param);
	}
	public function Doc_mon_an_theo_loai_mon($maloai)
	{
		$sql="select * from san_pham where ma_loai_sp = ? and trang_thai = '1' "; 
		$this->setQuery($sql);
		$param = array($maloai);
		return $this->loadAllRows($param);
	}
	public function Doc_loai_san_pham()
	{
		$sql="select * from loai_san_pham where trang_thai = '1' ";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
	public function Doc_mon_an_theo_loai_mon_phan_trang($options)
	{
		$sql = "SELECT * FROM san_pham where ma_loai_sp = '$options[0]' and trang_thai = '1' LIMIT $options[1] , 8  ";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
	public function Them_moi_san_pham($optionSP)
	{
		$sql="INSERT INTO san_pham (ma_sp, ten_sp, ma_loai_sp, hinh_anh, gia_ban, gioi_thieu, trang_thai) VALUES ('$optionSP[0]', '$optionSP[1]', '$optionSP[2]', N'$optionSP[3]', '$optionSP[4]','$optionSP[5]',  '1');";
		$this->setQuery($sql);
		return ($this->execute()->rowCount() > 0);
	}
	public function Xoa_san_pham($masp)
	{
		$query = "UPDATE san_pham SET trang_thai = '0' WHERE ma_sp = '$masp'";
		$this->setQuery($query);
		return ($this->execute()->rowCount() > 0);
	}
	public function Up_san_pham($optionSP)
	{
		$query = "UPDATE san_pham SET ten_sp = N'$optionSP[0]', ma_loai_sp = N'$optionSP[1]', hinh_anh = N'$optionSP[2]', gia_ban = $optionSP[3], gioi_thieu = N'$optionSP[4]', trang_thai = '1' WHERE ma_sp = N'$optionSP[5]' ";
		// $query = "UPDATE san_pham SET ten_sp = ?, ma_loai_sp = ?, hinh_anh = ?, gia_ban = ?, gioi_thieu = ?, trang_thai = 1 WHERE ma_sp = ? ";
		$this->setQuery($query);
		return ($this->execute()->rowCount() > 0);
	}
}
 ?>