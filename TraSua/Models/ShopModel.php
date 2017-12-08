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
}