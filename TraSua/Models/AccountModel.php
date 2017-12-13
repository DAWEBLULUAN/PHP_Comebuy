<?php 


/**
* 
*/
require 'Models/Model.php';
class AccountModel extends Model
{
	private $table = "tai_khoan";
	private $id = "id";
	
	public function check($options)
	{
		$query = "SELECT id FROM tai_khoan WHERE ten_tk = ? AND mat_khau = ? AND trang_thai = 1";
		$this->setQuery($query);
		return $this->checkIfAvailable($options);
	}
	public function changePassword($options)
	{
		$query = "UPDATE tai_khoan SET mat_khau = ? WHERE id = ?";
		$this->setQuery($query);
		return ($this->execute($options)->rowCount() > 0);
	}

	public function autoGenerateAccountId()
	{
		$query = "SELECT COUNT(*) AS 'Count' FROM tai_khoan";
		$this->setQuery($query);
		return $this->loadRow();
	}

	public function create($options)
	{
		$query = "INSERT INTO tai_khoan VALUES(?, ?, ?, ?, ?, ?)";
		$this->setQuery($query);
		return ($this->execute($options)->rowCount() > 0);
	}


	public function getAll()
	{
		$query = "SELECT tai_khoan.*, nguoi_dung.*, loai_tai_khoan.ma_loai_tk, loai_tai_khoan.ten_loai_tk FROM tai_khoan, nguoi_dung, loai_tai_khoan WHERE tai_khoan.id = nguoi_dung.tai_khoan_id AND tai_khoan.loai_tai_khoan = loai_tai_khoan.ma_loai_tk";
		$this->setQuery($query);
		return $this->loadAllRows();
	}


	public function update($options)
	{
		$query = "UPDATE tai_khoan SET ten_tk = ?, mat_khau = ? WHERE id = ?";
		$this->setQuery($query);
		return ($this->execute($options)->rowCount() > 0);
	}

	public function lock($options)
	{
		$query = "UPDATE tai_khoan SET trang_thai = ? WHERE id = ?";
		$this->setQuery($query);
		return ($this->execute($options)->rowCount() > 0);
	}

	public function changeType($options)
	{
		$query = "UPDATE tai_khoan SET loai_tai_khoan = ? WHERE id = ?";
		$this->setQuery($query);
		return ($this->execute($options)->rowCount() > 0);
	}

}