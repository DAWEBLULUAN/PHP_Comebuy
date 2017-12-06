<?php 
include ("Controllers/C_SanPham.php");
$c_sanpham = new C_sanpham();

$route = isset($_GET["route"]) ? $_GET["route"] : "Hien_thi_san_pham";
$c_sanpham->$route();

 ?>