<?php

/**
* 
*/
require 'Models/AccountTypeModel.php';
class AccountTypeController
{
	
	public function index()
	{
		echo "You are in AccountTypeController";
	}

	public function get()
	{
		$acc_type_m = new AccountTypeModel();
		$options = array($_SESSION["account_id"]);
		$acc_type =  $acc_type_m->get($options);
		if($acc_type){
			$_SESSION["account_type"] = $acc_type->ma_loai_tk;
			$_SESSION["account_type_name"] = $acc_type->ten_loai_tk;
		}
		header('Location: index.php');
	}
}