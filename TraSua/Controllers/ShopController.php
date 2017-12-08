<?php



require 'Models/ShopModel.php';
/**
* 
*/
class ShopController
{
	
	public function get()
	{
		if(!isset($_SESSION["shop"]))
		{
			$shop_m = new ShopModel();
			$_SESSION["shop"] = $shop_m->get();
		}

		// print_r($_SESSION["shop"]);
	}
}