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

	public function index()
	{
		require 'Views/admin/shop-info.php';
	}

	public function update()
	{
		$options = array();
		$options[] = $_POST["name"];
		$options[] = $_POST["phone"];
		$options[] = $_POST["address"];
		$options[] = $_POST["email"];
		$options[] = $_POST["id"];

		// print_r($options);


		$shop_m = new ShopModel();
		$shop_m->update($options);
		$_SESSION["shop"] = $shop_m->get();
		self::index();

	}
}