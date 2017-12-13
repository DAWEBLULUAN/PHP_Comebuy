<?php

/**
* 
*/
require 'Models/Model.php';
class UserModel extends Model
{
	
	public function getUserInfomation($options)
	{
		$query = "SELECT nguoi_dung.*, tai_khoan.id FROM nguoi_dung, tai_khoan WHERE tai_khoan.id = nguoi_dung.tai_khoan_id AND tai_khoan.id = ? ";
		$this->setQuery($query);
		return $this->loadRow($options);
	}
	public function update($options)
	{
		$query = "UPDATE nguoi_dung SET ten_nguoi_dung = ?, gioi_tinh = ?, ngay_sinh = ?, so_dien_thoai = ?, email = ?, dia_chi = ? WHERE ma_nguoi_dung = ?";
		$this->setQuery($query);
		return ( $this->execute($options)->rowCount() > 0);
	}

	public function autoGenerateUserId()
	{
		$query = "SELECT COUNT(*) AS 'Count' FROM nguoi_dung";
		$this->setQuery($query);
		return $this->loadRow();
	}

	public function create($options)
	{
		$query = "INSERT INTO nguoi_dung(ma_nguoi_dung ,ten_nguoi_dung, tai_khoan_id, so_dien_thoai, dia_chi) VALUES(?, ?, ?, ?, ?)";
		$this->setQuery($query);
		return ($this->execute($options)->rowCount() > 0);
	}


	public function getAll()
	{
		$query = "SELECT * FROM nguoi_dung";
	}


}