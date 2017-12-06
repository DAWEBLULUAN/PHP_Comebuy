<?php 
/**
* 
*/
require_once ("Model.php");
class M_HoaDon extends Model
{
	
	public function Doc_hoa_don()
	{
		$sql="select * from hoa_don_ban";
		$this->setQuery($sql);
		return $this->loadAllRows();	
	}
	public function Them_moi_hoa_don($optionSP)
	{
		//ma_hoa_don	ngay_lap	nguoi_lap	sdt_khach_hang	tong_tien	don_vi_tien	trang_thai
		$sql="INSERT INTO hoa_don_ban (ma_hoa_don, ngay_lap, nguoi_lap, sdt_khach_hang, tong_tien, don_vi_tien, trang_thai) VALUES ('$optionSP[0]', '$optionSP[1]', '$optionSP[2]', N'$optionSP[3]', '$optionSP[4]','$optionSP[5]',  '1');";
		$this->setQuery($sql);
		return ( $this->execute()->rowCount() > 0);
	}
}





 ?>