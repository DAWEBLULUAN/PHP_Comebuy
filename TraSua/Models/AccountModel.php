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

		$query = "SELECT id FROM tai_khoan WHERE ten_tk = ? AND mat_khau = ?";
		$this->setQuery($query);
		return $this->checkIfAvailable($options);
	}
}