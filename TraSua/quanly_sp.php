<?php 
require("Controllers/c_quanly_sp.php");
$caddsp = new C_qlsp();
$route = (!empty($_GET["route"])? $_GET["route"] : 'load_tat_ca_sp');	
$caddsp->$route();
 ?>


