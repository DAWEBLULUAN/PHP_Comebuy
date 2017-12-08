<?php


require 'Models/Model.php';

/**
* 
*/
class ShopModel extends Model
{
	
	public function get()
	{
		$query = "SELECT * FROM cua_hang";
		$this->setQuery($query);
		return $this->loadRow();
	}

	public function update($options)
	{
		$query = "UPDATE cua_hang SET ten_cua_hang = ?, so_dien_thoai = ?, dia_chi = ?, email = ? WHERE ma_cua_hang = ? ";
		$this->setQuery($query);
		return $this->execute($options);
	}
}