<?php

/**
* 
*/
require 'Models/Model.php';
class UserModel extends Model
{
	
	public function getUserInfomation($options)
	{
		$query = "SELECT nguoi_dung.*, tai_khoan.ma_nguoi_dung FROM nguoi_dung, tai_khoan WHERE tai_khoan.ma_nguoi_dung = nguoi_dung.ma_nguoi_dung AND tai_khoan.id = ? ";
		$this->setQuery($query);
		return $this->loadRow($options);
		
		$query = "SELECT * FROM nguoi_dung WHERE gioi_tinh = $options[0] LIMIT $options[1], 1";
		$this->setQuery($query);
		return $this->loadRow();
		// $this->setQuery($query);
		// $sex = 0;
		// $a = 1;
		// $condition = array($sex, $a);
		// $sth = $this->conn->prepare($query);
		// for ($i=0; $i < count($options); $i++) { 
		// 		$sth->bindParam($i+1, $options[$i]);
		// }
		// $sth->bindParam(':sex', $condition[0], PDO::PARAM_INT);
		// $sth->bindParam(':limit', $condition[1], PDO::PARAM_INT);
		// $sth->execute();
		// return $sth->fetchAll(PDO::FETCH_OBJ);

		// return $this->loadAllRows($options);
	}
}