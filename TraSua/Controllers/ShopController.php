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
		$options[] = $_GET["name"];
		$options[] = $_GET["phone"];
		$options[] = $_GET["address"];
		$options[] = $_GET["email"];
		$options[] = $_GET["id"];

		// print_r($options);


		$shop_m = new ShopModel();
		$shop_m->update($options);
		$_SESSION["shop"] = $shop_m->get();
		require 'Views/admin/shop-info.php';



	}
}