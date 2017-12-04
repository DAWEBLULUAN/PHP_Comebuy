<?php 
require("Controllers/c_add-products.php");
$caddsp = new C_addsp();
$route = (isset($_GET["route"])? $_GET["route"] : 'themspidx');
$caddsp->$route();

 ?>
