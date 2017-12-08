<?php 
session_start();
require ("Controllers/c_cart.php");
$cart = new C_cart();
 $goiham =  isset($_GET["route"])? $_GET["route"] : "LoadCart";
$cart->$goiham();
 ?>