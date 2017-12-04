<?php



require 'Models/Model.php';

/**
* 
*/
class AccountTypeModel extends Model
{
	
	public function get($options)
	{
		$query = "SELECT loai_tai_khoan.*, tai_khoan.id FROM loai_tai_khoan, tai_khoan WHERE ma_loai_tk = loai_tai_khoan AND tai_khoan.id = ?";
		$this->setQuery($query);
		return $this->loadRow($options);
		// return $options[0];
	}
}