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
		$query = "INSERT INTO tai_khoan VALUES(?, ?, ?, ?, ?, ?, ?)";
		$this->setQuery($query);
		return ($this->execute($options)->rowCount() > 0);
	}
}